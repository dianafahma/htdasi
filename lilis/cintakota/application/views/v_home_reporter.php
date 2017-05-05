<title>Home Reporter</title>
<center>
<?php echo anchor('c_berita/kelolarep','<b class="btn btn-twitter btn-lg"><i class="icon-twitter icon-large"></i>SELAMAT DATANG DI FORM REPORTER</b>')?>

<h1 align="center"><?php echo $this->m_home->get_detail_reporter($this->session->userdata('ses_username'))->nama; ?></h1>

<br>
<br>
<br>
<!--
<?php
foreach ($list_reporter as $row)
{ 
?>
		<label class="jarak2"><font style="Impact" color='red'>#<?php echo $list_reporter['nama']; ?></font>
		<p class="p-border"></p>
		<?php
		
		
} 
?>
-->