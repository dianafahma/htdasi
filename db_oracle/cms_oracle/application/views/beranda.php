<!DOCTYPE html>
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
				<li> <?php echo anchor ('cms/conta_us','Kontak Kami')?></li>	
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
    <!-- Page Content -->
   <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill" style="background-image:url('media/img/10.jpg');"></div>
                <div class="carousel-caption">
                    <h2>Selamat Datang Calon Siswa Baru</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('media/img/12.png');"></div>
                <div class="carousel-caption">
                </div>
            </div>
        </div>
        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>
			 <br />
		 <div class="row">
            <div class="col-lg-12">
                <div class="well text-center"><b>
                    Pendaftaran Siswa Baru Di Buka Mulai 25 Mei 2015 Dan Akan Di Tutup Pada Tanggal 30 Mei 2015
                </b></div></div></div>
    <!-- Page Content -->
    <div class="container">

        <!-- Marketing Icons Section -->
         <div class="row">
            <div class="col-md-4">
                <h2>Panduan Pendaftaran</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe rem nisi accusamus error velit animi non ipsa placeat. Recusandae, suscipit, soluta quibusdam accusamus a veniam quaerat eveniet eligendi dolor consectetur.</p>
                <a class="btn btn-default" href="#">Selanjutnya</a>
            </div>
            <!-- /.col-md-4 -->
            <div class="col-md-4">
                <h2>Pengumuman</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe rem nisi accusamus error velit animi non ipsa placeat. Recusandae, suscipit, soluta quibusdam accusamus a veniam quaerat eveniet eligendi dolor consectetur.</p>
                <a class="btn btn-default" href="#">Selanjutnya</a>
            </div>
            <!-- /.col-md-4 -->
            <div class="col-md-4">
                <h2>Pendaftaran Ulang</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe rem nisi accusamus error velit animi non ipsa placeat. Recusandae, suscipit, soluta quibusdam accusamus a veniam quaerat eveniet eligendi dolor consectetur.</p>
                <a class="btn btn-default" href="#">Selanjutnya</a>
            </div>
            <!-- /.col-md-4 -->
        </div>
        <!-- /.row -->
        <!-- Portfolio Section -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Galeri Sekolah</h2>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-portfolio img-hover" src="http://placehold.it/700x450" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-portfolio img-hover" src="http://placehold.it/700x450" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-portfolio img-hover" src="http://placehold.it/700x450" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-portfolio img-hover" src="http://placehold.it/700x450" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-portfolio img-hover" src="http://placehold.it/700x450" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-portfolio img-hover" src="http://placehold.it/700x450" alt="">
                </a>
            </div>
        </div>
        <!-- /.row -->
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
