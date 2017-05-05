<center>
<table border="1" align="center">
<tr bgcolor="#0033ff">
	<td>NIM</td>
	<td>NAMA</td>
	<td>UMUR</td>
	<td colspan="2">AKSI</td>
</tr>
<?php
foreach($list_mhsw as $rows) { ?>
<tr>
<td><?php echo $rows['nim'] ?></td>
 <td><?php echo $rows['nama'] ?></td>
 <td><?php echo $rows['umur'] ?></td>
	<!--<td><?php echo $rows->nim; ?></td>
	<td><?php echo $rows->nama; ?></td>
	<td><?php echo $rows->umur; ?></td>-->
</tr>
<?php
	}
?>
</table>

<table border="1" align="center">
<tr>
	<td width="390"></td>
	<div class="paging"><?php echo $this->pagination->create_links(); ?> </div>
	
</tr>
</table>
</center>
