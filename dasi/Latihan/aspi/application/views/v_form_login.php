<html>
<body>
<center>
<?php echo form_open('c_member/login');?>
<table border="1" align="center" >
	<tr>
		<td>
			<h2 align="center" >Login</h2>
			<p>Username:<input type="text" name="username"></p>
			<p>Password:<input type="password" name="password"></p>
			<p><input type="submit" value="Login"></p>
		</td>
	</tr>
</table>
<?php echo form_close();?>
</center>
</body>
</html>
