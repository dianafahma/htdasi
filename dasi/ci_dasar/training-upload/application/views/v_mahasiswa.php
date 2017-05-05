<style>
.paging {
 background-color:aqua;
}

</style>
<div align="center"><h4>Daftar Mahasiswa</h4></div>
<table width="400px" border="1" align="center">
<tr>
 <td>Nim</td>
 <td>Nama</td>
 <td>Umur</td>
</tr>

<?php
foreach($list_mahasiswa as $rows) { ?>
<tr>
 <td><?php echo $rows['nim'] ?></td>
 <td><?php echo $rows['nama'] ?></td>
 <td><?php echo $rows['umur'] ?></td>
</tr>
<?php } ?>
</table>

<table border="1" align="center">
 <tr>
   <td width="390">
   <div class="paging"><?php echo $this->pagination->create_links(); ?> </div>
   </td>
 </tr>
</table>
