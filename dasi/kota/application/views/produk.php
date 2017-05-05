 <h1>Daftar barang </h1>
<?php if (!empty($product_list)): ?>
<ul>
   <?php foreach($product_list as $product): ?>
   <li>
   <?php echo $product->name ?> ($ <?php echo $product->price ?>) –

    <a href='<?php echo site_url("cart/add/$product->id") ?>'>Beli</a>
   </li>
   <?php endforeach ?>
</ul>
 <?php else : ?>
    <p>Produk kosong.</p>
<?php endif ?>