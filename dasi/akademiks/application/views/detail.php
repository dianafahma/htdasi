<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Selamat Datang</title>
    <link href="<?php echo base_url();?>media/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>media/css/modern-business.css" rel="stylesheet">
    <link href="<?php echo base_url();?>media/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>
<body>

     <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" style="background-color:rgba(0,0,0,0.7);">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="http://localhost/icm/">INSAN CANDIKIA MADANI</a>
            </div>
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav navbar-right">
							<li>
								<?php echo anchor('http://localhost/icm/','Home')?>
							</li>
							<li>
								<?php echo anchor('c_icm/berita.html','Berita')?>
							</li>
							<li>
								<?php echo anchor('c_icm/visi-misi.html','Visi Misi')?>
							</li>
							<li>
								<?php echo anchor('c_icm/daftar','Daftar')?>
							</li>
							<li>
								<?php echo anchor('c_icm/pendaftar','Pendaftar')?>
							</li>
							<li>
								<?php echo anchor('c_icm/contact.html','Contact')?>
							</li>
								</ul>
							</li>
						</ul>
					</div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
	
		
    <!-- Page Content -->
    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">FORM PENDAFTARAN CALON SISWA BARU 2015/2016
                </h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8">
				<?php
					echo form_open('c_icm/daftar');
				?>				
				<table >
				<tr height="50px">
					<td width="250px">ID PENDAFTARAN</td>
					<td width="25px">:</td>
					<td><?php echo $row_data->id_daftar; ?> </td>
				</tr>
				<tr height="50px">
					<td>NAMA</td>
					<td>:</td>
					<td width="300px"><?php echo $row_data->id_daftar; ?> </input></td>
				</tr>
				<tr height="50px">
					<td>JENIS KELAMIN</td>
					<td>:</td>
					<td width="100px"><?php echo $row_data->jk; ?> </td>
				</tr>				
				<tr height="50px">
					<td>UMUR</td>
					<td>:</td>
					<td width="400px"><?php echo $row_data->umur; ?> </td>
				</tr>
				<tr height="50px">
					<td>ALAMAT</td>
					<td>:</td>
					<td width="400px"><?php echo $row_data->alamat; ?> </td>
				</tr>
				<tr height="50px">
					<td>ASAL SEKOLAH</td>
					<td>:</td>
					<td width="400px"><?php echo $row_data->asal_sekolah; ?> </td>
				</tr>
				</tr>
				<tr height="50px">
					<td>NILAI UN</td>
					<td>:</td>
					<td width="500px"><?php echo $row_data->nilai_un; ?> </td>
				</tr>
				<tr height="50px">
					<td>NILAI UAS</td>
					<td>:</td>
					<td width="400px"><?php echo $row_data->nilai_uas; ?> </td>
				</tr>
				<tr height="50px">
					<td>NAMA AYAH</td>
					<td>:</td>
					<td width="400px"><?php echo $row_data->nama_ayah; ?> </td>
				</tr>			
				<tr height="50px">
					<td>PEKERJAAN AYAH</td>
					<td>:</td>
					<td width="400px"><?php echo $row_data->pkj_ayah; ?></td>
				</tr>
				<tr height="50px">
					<td>PENDIDIKAN TERAKHIR</td>
					<td>:</td>
					<td width="400px"><?php echo $row_data->pdd_ayah; ?></td>
				</tr>
				<tr height="50px">
					<td>NAMA IBU</td>
					<td>:</td>
					<td width="400px"><?php echo $row_data->nama_ibu; ?></td>
				</tr>			
				<tr height="50px">
					<td>PEKERJAAN IBU</td>
					<td>:</td>
					<td width="400px"><?php echo $row_data->pkj_ibu; ?></td>
				</tr>
				<tr height="50px">
					<td>PENDIDIKAN TERAKHIR</td>
					<td>:</td>
					<td width="400px"><?php echo $row_data->pdd_ibu; ?></td>
				</tr>
				</tr>				
				</table>
				<br/>
				<table align="center">
				<tr>
					<td></td>
					<td><?php echo form_close();?></td>
					<td><?php echo form_Submit('submit','Kirim Data','class="btn btn-success"');?></td>
				<?php
				echo form_close();
				?>
				</tr>

				</table>

                <hr>

            </div>

            <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-4">
                <!-- Side Widget Well -->
                <div class="well">
					<img src="<?php echo base_url();?>media/img/loading.gif" width="315px" height="300px" class="img-thumbnail"/>
				<span ><input type="file"  name="image" ></input></span>
					
                </div>
				
                <!-- Blog Categories Well -->
                <div class="well">
                    <h4>Blog Categories</h4>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                            </ul>
                        </div></div>
                    <!-- /.row -->
                </div>

                <!-- Side Widget Well -->
                <div class="well">
                    <h4>Side Widget Well</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
                </div>

            </div>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->
    <script href="<?php echo base_url();?>js/jquery.js"></script>
    <script href="<?php echo base_url();?>js/bootstrap.min.js"></script>

</body>

</html>
