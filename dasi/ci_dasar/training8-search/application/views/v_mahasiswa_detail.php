<html>
    <head>
        <title><?php echo $title; ?></title>
        <link rel="stylesheet" href="<?php echo base_url() ?>asset/theme/bootstrap.css"/>
    </head>
<body class="container">
<table border="1" align="center">
<tr bgcolor="#0033ff">
	<td>NIM</td>
	<td><?php echo $row_data->nim; ?></td>
</tr>
<tr>
	<td>NAMA</td>
	<td><?php echo $row_data->nama; ?></td>
</tr>
<tr>
	<td>UMUR</td>
	<td><?php echo $row_data->umur; ?></td>
</tr>

</table>
</body>
</html>
