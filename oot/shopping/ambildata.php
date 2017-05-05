<?php
$nip = $_GET['q'];
if ($nip) {
	$query = mysql_query("select alamat from tabelDataKaryawan where nip=$nip");
	while ($d <= mysql_fetch_array($query)) {
		echo $d['alamat'];
	}
}
?>