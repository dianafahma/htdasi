<?php
if (! $this->session->userdata('ses_login_status')){
	redirect ('c_login/login');
}
?>
<html>
<head>
<title>
</title>
	<link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url().'asset/css/style.css'?>"/>
</head
<body >
<p style="margin-left:30px ;">
<h2>Kontak Kami</h2>
<br/>
<u><h3>SembakoGampang</h3></u>
<br/>Informasi lengkap dapat menghubungi kami di: </p>
Alamat &nbsp; : Jl. Sumbawa No 96, Bandung 40212<br/>
HP &nbsp; &nbsp; &nbsp; &nbsp; : +62812 2810 2511 <br/>
Email &nbsp; &nbsp; : sembako.gampang@gmail.com<br/>
</p><br/>
</body>
</html>