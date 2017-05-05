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
<div class="content">
	<h3>Update Data Pendaftar</h3>
	<?php 
	echo form_open('c_cms/update_edit/'.$row_data->KODE_DAFTAR);
	?>
	<table>
		<tr>
			<td>Kode Prodi</td>
			<td>: </td>
			<td>
			<?php echo form_input('kode_daftar',$row_data->KODE_DAFTAR,'class="btn-warning" style="height:30px;padding-left:10px;"');?>
			<?php //echo form_input('kode_daftar',$row_data->KODE_DAFTAR,'class="form-control"');?>
			</td>
		</tr>
		<tr>
			<td>Nama Prodi</td>
			<td>: </td>
			<td>
				<?php echo form_input('nama_murid',$row_data->NAMA_MURID,'class="btn-warning" style="height:30px;padding-left:10px;"');?>
			</td>
		</tr>
		<tr>
			<td>Asal Sekolah</td>
			<td>: </td>
			<td><?php echo form_input('asal_sekolah',$row_data->ASAL_SEKOLAH,'class="btn-warning" style="height:30px;padding-left:10px;"');?>
			</td>
		</tr>
		<tr>
			<td>Rata-Rata Nilai Ujian Nasional</td>
			<td>: </td>
			<td><?php echo form_input('nilai_un',$row_data->NILAI_UN,'class="btn-warning" style="height:30px;padding-left:10px;"');?>
			</td>
		</tr>
		<tr>
			<td>Rata-Rata Nilai Ujian Sekolah</td>
			<td>: </td>
			<td><?php echo form_input('nilai_us',$row_data->NILAI_US,'class="btn-warning" style="height:30px;padding-left:10px;"');?>
			</td>
		</tr>
	</table>
<table>
	<tr>
		<td>
		<button class="btn-warning" onclick="location.href='<?php echo base_url();?>index.php/c_cms/insert'">Batal</button>
		<?php echo form_submit('submit','simpan','class="btn-warning"');?></td>
	</tr>
		<?php echo form_close();
		 ?>
</table>

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