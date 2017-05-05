<title>Kelola Berita</title><H1>PROFIL</H1>	
<div>
<?php
	foreach ($list_rep->result() as $rep)
{ 
?>
<div>
		<?php echo $rep->username; ?><br>
		<?php echo $rep->password; ?><br>
		</div>
<?php
	}
?></div>