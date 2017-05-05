</pre>
<div class="LeftContent">
<div id="navigation">
<ul class="top-level">
<ul class="top-level"><!--?php <br ?--> $kat = mysql_query("SELECT category, category.id from category join product on product.id_category=category.id group by category");</ul>
</ul>
<ul class="top-level">
<ul class="top-level">while($list=mysql_fetch_array($kat)){</ul>
</ul>
<ul class="top-level">
<ul class="top-level">echo"
    <li><a href="?v=produk&cat=$list[id]">$list[category]</a></li>
</ul>
</ul>
<ul class="top-level">
<ul class="top-level">";</ul>
</ul>
<ul class="top-level">
<ul class="top-level">}</ul>
</ul>
<ul class="top-level">?></ul>
</div>
</div>
<pre>