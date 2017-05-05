</pre>
<div class="BigContent">
<div class="RightContent"><!--?php <br ?--> $prod = $_GET['id'];
 $cat = $_GET['cat'];
 if($cat){
 $sql = mysql_query("SELECT * FROM category WHERE id = '$cat'"); //untuk mengambil tabel kategori berdasarkan id
 $jdl = mysql_fetch_array($sql);
 echo "
<h1 class="Judul">Kategori $jdl[category]</h1>
";
 $sql2 = mysql_query("SELECT * FROM product WHERE id_category='$cat'");
 while($t = mysql_fetch_array($sql2)){ ?>
<div class="produk"><a href="?v=produk&id=<?php echo $t['id']; ?>">
 <img class="FotoProduk" title="<?php echo $t['product_name']; ?>" src="foto/<?php echo $t['image']; ?>" alt="" height="110px" />
 </a>
 <br class="clearfloat" />
<div class="KotakKet"><a class="pesanprod" href="input.php?input=add&id=<?php echo $t['id']; ?>">Pesan</a>
 <a class="detprod" href="?v=produk&id=<?php echo $t['id']; ?>">Detail</a></div>
</div>
<!--?php     } } elseif($prod){ ?-->
<!--?php //jika variable cat tidak terdefinisikan maka lanjut ke proses dibawah ini  $sql = mysql_query("SELECT * FROM product WHERE id='$prod'");   $d = mysql_fetch_array($sql);   ?-->
<h1 class="Judul">Produk <!--?php echo $d['product_name']; ?--></h1>
<div class="KetProd"><img class="GambarKetProd" src="foto/<?php echo $d['image']; ?>" alt="" />
 <!--?php echo $d['deskripsi']; ?--></div>
 <a class="haha" href="javascript:history.go(-1)">Kembali</a> | <a class="haha" href="input.php?input=add&id=<?php echo $d['id']; ?>">Beli</a>
<!--?php } ?-->