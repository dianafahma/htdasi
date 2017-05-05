<link href="<?php echo base_url().'media/css/bootstrap.min.css';?>" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url().'media/css/shop-homepage.css';?>" rel="stylesheet">

<?php echo include('header.php'); ?>


<html lang="en">
<head>
<meta charset="UTF-8">
<title>Form Register Sederhana dengan Bootstrap</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container well well-lg	">
<div class="bs-example">
<?php #include('header.php');
	echo form_open('belanja/proses_beli');

		$i=1;
		while ($i <= 100) {
			$no=1;
			$i++;
		}

	?>
    <h1>Register</h1>
    <form class="form-horizontal">
        <div class="form-group">
            <label class="control-label col-xs-3" for="inputEmail">ID TRANSAKSI:</label>
            <div class="col-xs-9">
                <input type="text" name="id_trx" class="form-control" id="inputEmail" placeholder="ID TRANSAKSI">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-xs-3" for="Nama">NAMA PEMESAN:</label>
            <div class="col-xs-9">
                <input type="text" name="nama_pemesan" class="form-control" id="Nama" placeholder="Nama Anda">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-xs-3" for="telp">No. Telp:</label>
            <div class="col-xs-9">
                <input type="tel" name="hp" class="form-control" id="telp" placeholder="Nomor Telepon / Handphone">
            </div>
        </div>

         <div class="form-group">
            <label class="control-label col-xs-3" for="telp">EMAIL:</label>
            <div class="col-xs-9">
                <input type="tel" name="email" class="form-control" id="telp" placeholder="Nomor Telepon / Handphone">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-xs-3" for="Alamat">Alamat:</label>
            <div class="col-xs-9">
                <textarea rows="3" name="alamat" class="form-control" id="Alamat" placeholder="Masukan Alamat Lengkap"></textarea>
            </div>
        </div>
        <div class="form-group">
            <div class="col-xs-offset-3 col-xs-9">
                <label class="checkbox-inline">
                    <input type="checkbox" value="Setuju">  Saya Setuju dengan <a href="#">Kebijakan dan Ketentuan</a> yang berlaku.
                </label>
            </div>
        </div>
        <br>
        <div class="form-group">
            <div class="col-xs-offset-3 col-xs-9">
                <input type="submit" class="btn btn-primary" value="Kirim">
                <input type="reset" class="btn btn-default" value="Reset">
            </div>
        </div>
    </form>
    <form class="form-horizontal">
        <div class="form-group">
            <label class="control-label col-xs-3" for="inputEmail">Email:</label>
            <div class="col-xs-9">
                <input type="email" class="form-control" id="inputEmail" placeholder="Email">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-xs-3" for="Nama">Nama:</label>
            <div class="col-xs-9">
                <input type="text" class="form-control" id="Nama" placeholder="Nama Anda">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-xs-3" for="telp">No. Telp:</label>
            <div class="col-xs-9">
                <input type="tel" class="form-control" id="telp" placeholder="Nomor Telepon / Handphone">
            </div>
        </div>
        
        <div class="form-group">
            <label class="control-label col-xs-3" for="Alamat">Alamat:</label>
            <div class="col-xs-9">
                <textarea rows="3" class="form-control" id="Alamat" placeholder="Masukan Alamat Lengkap"></textarea>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-xs-3" for="KodePos">Kode Pos:</label>
            <div class="col-xs-9">
                <input type="text" class="form-control" id="KodePos" placeholder="Kode Pos">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-xs-3">Jenis Kelamin:</label>
            <div class="col-xs-2">
                <label class="radio-inline">
                    <input type="radio" name="gender" value="Laki-laki"> Laki-laki
                </label>
            </div>
            <div class="col-xs-2">
                <label class="radio-inline">
                    <input type="radio" name="gender" value="Perempuan"> Perempuan
                </label>
            </div>
        </div>
        <div class="form-group">
            <div class="col-xs-offset-3 col-xs-9">
                <label class="checkbox-inline">
                    <input type="checkbox" value="Setuju">  Saya Setuju dengan <a href="#">Kebijakan dan Ketentuan</a> yang berlaku.
                </label>
            </div>
        </div>
        <br>
        <div class="form-group">
            <div class="col-xs-offset-3 col-xs-9">
                <input type="submit" class="btn btn-primary" value="Kirim">
                <input type="reset" class="btn btn-default" value="Reset">
            </div>
        </div>
    </form>
</div>
</div>
</body>
</html>
