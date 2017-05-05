<html>
<head>
<title>
</title>
<link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url().'asset/css/style.css'?>"/>
</head>
<body>
<?php echo form_open('c_login/login');
?>
<center>
<table border="2">
	<tr class="login">
		<td width="200px">
			<h2>Login Please</h2>
			<p>Username : <input type="text" name="username"/></p>
			<p>Username : <input type="password" name="password"/></p>
			<p><input type="submit" value="login"/></p>
		</td>
	</tr>
</table>
</center>
<?php echo form_close();?>
</body>
</html>