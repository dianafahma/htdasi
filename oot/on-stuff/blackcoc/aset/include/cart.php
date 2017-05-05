</pre>
<div class="BigContent">
<div class="RightContent">
<h1 class="Judul">Shopping Cart</h1>
<div class="KetProd">$sid = session_id(); $no = 1; $sql = mysql_query("SELECT * FROM keranjang, product WHERE id_session='$sid' AND keranjang.id_product=product.id"); $hitung = mysql_num_rows($sql); if ($hitung < 1){echo""; } else { while($tian=mysql_fetch_array($sql)){ echo""; $no++; } } ?>
<table class="TableCart" style="border-top: 1px dotted #0; border-bottom: 1px dotted #0;" width="100%" border="0" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<th>No</th>
<th>Foto Produk</th>
<th>Nama Produk</th>
<th>Jumlah</th>
<th>Harga</th>
<th>Delete</th>
<!--?php <br ?-->
<td>$no</td>
<td><img src="foto/$tian[image]" alt="" width="50" /></td>
<td>$tian[product_name]</td>
<td>$tian[qty]</td>
<td>$tian[price]</td>
<td><a href="input.php?input=delete&id=$tian[id_keranjang]">Hapus</a></td>
</tr>
</tbody>
</table>
 <a class="tombol" href="?v=order">Selesai</a>
 <a class="tombol" href="index.php">Belanja Lagi..</a></div>