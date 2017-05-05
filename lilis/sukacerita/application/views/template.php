<!DOCTYPE html>
<html>
<head>
	<title>Ayo Magang :: Admin Page</title>
</head>

<body>

<?php echo anchor('home_admin/tambah','Input Data')?>
<?php include ('header.php');
?>	
<div>
	This is 00
	<?php echo $this->load->view($page_content) ?>
</div>
<?php include ('footer.php') ?>
</body>
</html>