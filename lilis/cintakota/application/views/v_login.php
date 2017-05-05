<html>
<body class="body">
<head>
<title marquee direction ="left">Form Login</title>
<link href="<?php echo base_url(); ?>css/frontend/style.css" rel="stylesheet" type="text/css" />
</head>
	<?php echo form_open('c_berita/login'); ?>
		<center>
		<div bgcolor="32efc7" style="margin-top:90px; border:1px solid red; width:32%; height:5%; padding-bottom:22px; padding-left:52px; padding-right:52px;">
		<br><?php echo anchor('c_home/display', 'Kembali Ke Website "<i bgcolor="red">BERITA KOTA MAKASSAR ONLINE</i>"');?>
		</div>
		<div bgcolor="32efc7" style="margin-top:1px; border:1px solid blue; width:32%; padding-bottom:22px; padding-left:52px; padding-right:52px;">
			<h1> Login Form </h1>
			<table>
				<tr>
					<td>Username </td>
					<td>: <input type="text" name="username"></td>
				</tr>
				<tr>
					<td>Password </td>
					<td>: <input type="password" name="password"></td>
				</tr>
				<tr align=center>
					<td colspan=2><input type="submit" value="Login"
					style="background:#0000f7; color:white; padding:5px 10px;"></td>
				</tr>
			</table>
		</div>
		</center>
	<?php echo form_close(); ?>
</body>
</html>