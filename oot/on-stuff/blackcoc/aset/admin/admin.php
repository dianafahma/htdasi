<!--?php <br ?-->include "../include/lib.php";
error_reporting(0);
session_start();
if (empty($_SESSION[namauser]) AND empty($_SESSION[passuser])){
echo "</pre>
<center>Silahkan Login terlebih dahulu
";
 echo "<a href="index.php"><strong>LOGIN</strong></a></center>
<pre>";
}
else{
?>
 
:: Toko Online ::
<script type="text/javascript" src="nicedit/nicEdit.js"></script><script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="media/js/jquery.dataTables.js"></script><script charset="utf-8" type="text/javascript">// <![CDATA[
            $(document).ready(function(){
                $('#datatables').dataTable({
                    "sPaginationType":"full_numbers",
                    "aaSorting":[[2, "desc"]],
                    "bJQueryUI":false
                });
                $('#pengelola').dataTable({
                    "sPaginationType":"full_numbers",
                    "aaSorting":[[2, "desc"]],
                    "bJQueryUI":false
                });
            })
 
// ]]></script>
<script type="text/javascript">// <![CDATA[
    bkLib.onDomLoaded(function(){
        nicEditors.allTextAreas(({buttonList : ['fontSize','bold','italic','underline','strikeThrough','subscript','superscript','html','image']})) });
// ]]></script>
 
</pre>
<div class="wrap">
<div class="header">
<div class="LeftOne"><a href="index.php">
 </a></div>
<div class="RightOne">
<div class="cart"><span class="KetCart">Administrator</span></div>
</div>
</div>
 <br class="clearfloat" />
<div class="BigCOntent">
<div class="LeftContent">
<div id="navigation">
<ul class="top-level">
    <li><a href="?mod=home">Home</a></li>
    <li><a href="?mod=product">Produk</a></li>
    <li><a href="?mod=category">Kategori</a></li>
    <li><a href="?mod=report">Report</a></li>
    <li><a href="logout.php">Logout</a></li>
</ul>
</div>
</div>
<div class="RightContent"><!--?php <br ?--> if ($_GET[mod]=='home'){
 echo "
<h1 class="Judul">Selamat Datang</h1>
 Anda Telah masuk ke halaman administrator silahkan gunakan menu yang tersedia <img src="http://hitamcoklat.com/wp-includes/images/smilies/icon_smile.gif" alt=":)" class="wp-smiley"> 
 
";
 }
 //Add Kategori
 elseif ($_GET[mod]=='category'){
 require_once "modul/mod_kategori.php";
 }
 //Add Product
 elseif ($_GET[mod]=='product'){
 require_once "modul/mod_produk.php";
 }
 //Report
 elseif ($_GET[mod]=='report'){
 require_once "modul/report.php";
 }
 ?></div>
</div>
 <br class="clearfloat" />
<div class="footer">
© <!--?php echo date('Y') ?--> Membuat Sistem Shopping Cart | PHP dan MySQL Developed by <a href="http://www.hitamcoklat.com/">hitamcoklat</a></div>
</div>
<pre>
 
<!--?php } ?-->