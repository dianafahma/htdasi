<?php
if (! $this->session->userdata('ses_login_status')){
redirect ('c_member/login');
}
?>

<html>
	<head>
	</head>
<body>
	<center>
	<table border="1" width="1100px" align="center">
		<tr class="header" align="center" bgcolor="#cc22ff">
			<td height="20" >Header</td>
		</tr>
		<tr class="menu" align="center">
			<td><?php echo anchor('c_member/logout','Logout')?></td>
		</tr>
		<tr align="center" class="content">
			<td height="300px">selamat datang</td>
		</tr>
		<tr class="footer">
			<td>Footer </td>
		</tr>
	</table>
</center>
</body>
</html>