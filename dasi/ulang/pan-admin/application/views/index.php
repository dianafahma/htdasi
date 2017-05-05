<html>
<body>
<?php echo anchor('admin_c/input_item','Tulis Artikel')?>
<table>
	<tr>
		<td>No</td>
		<td>Judul</td>
		<td>Article</td>
		<td>Alamat</td>
		<td>Gambar</td>
	</tr>
	<?php 		
				$i=0;
				foreach($list_item as $row)
				{
				$i++;
				
			?>
			<tr>
				<td>
				<?php echo $i; ?>
				</td>
				<td>
				<?php echo 'article'; ?>
				</td>
				<td>
				<?php echo $row['artikel']; ?>
				</td>
				<td>
				<?php echo $row['provinsi']; ?>
				</td>
				<td>
				<?php echo $row['kota']; ?>
				</td>
			</tr>
	<?php }?>
</table>

</body>
</html>