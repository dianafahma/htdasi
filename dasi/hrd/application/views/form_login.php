<html>
<head>
	<title>Login Page</title>
</head>
<body>
<div>
<?php
echo form_open('c_loginhrd/masuk_app');
?>
	<label for="username">Username</label>
	<input type="text" name="username" placeholder=" Masukan username" required/><br/>
	<label for="username">Password</label>
	<input type="password" name="password" placeholder=" Masukan password" required/><br/>
	<label for="posisi">Posisi</label>
	<select name="posisi">
		<option  value="manager">Manager</option>
		<option value="owner">Owner</option>
		<option  value="staff">Staff</option>
	</select>
	<input type="submit" value="Masuk" />
<?php echo form_close();?>
<div>
</body>
<footer>HRD Mini PT Sinar Lilis Developed by Lilis Ayum</footer>
</html>