<?php
if (! $this->session->userdata('ses_login_status')){
	redirect ('c_login/login');
}
?>
<html>
<title>
</title>
<head>
	<link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url().'asset/theme/bootstrap.css'?>"/>
</head>
<body>
<p>
<blockquote align="left">
<h2>Sembako Gampang</h2>

<u><h3>Informasi Tata Tertib Koperasi Sembako Gampang</h3></u>
<br/>1. Dilarang memberikan data palsu</br>
2. Data yang diberikan hanya boleh di input sesuai member yang terdaftar</br>
3. Setiap Data harus valid pada 3 bulan terakhir</br>
4. Laporan yang tidak sesuai fisik yang tidak dapat di toleransi akan dikenakan sanksi</br>
5. Pelapor haruslah dari pihak utusan dari perwakilan member yang disetujui</br>
<br/>
</blockquote></p>
</body>
</html>