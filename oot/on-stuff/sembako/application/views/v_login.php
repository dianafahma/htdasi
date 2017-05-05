<html>
<head>
<title>
</title>
<link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url().'asset/theme/bootstrap.css'?>"/>
</head>
<body >
<?php echo form_open('c_login/login');
?>
<center>
<table class="well" style="position:center; margin-top:50px;">
	<tr class="form-horizontal">
		<td width="400px" style="padding-left: 20px;padding-right:20px;">
			<h2>Login Please !!</h2>
			<p class="col-lg-2 control-label"> Username <br/></p><input  class="form-control" type="text" name="username" placeholder="Username" required/>
			<p class="col-lg-2 control-label"> Password <br/></p><input class="form-control" type="password" name="password" placeholder="Password" required/><br/>
			<p style="padding-left:10px;"><input class="btn btn-primary" type="submit" value="Login"/></p>
		</td>
	</tr>
</table>
</center>
<?php echo form_close();?>
</body>
</html>