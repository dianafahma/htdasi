<?php 

$date = date( 'Y' ); // Tahun
$get3number = substr( $date,-3 ); // mengambil 3 angka dari sebelah kanan pada tahun sekarang
 
// Membuat fungsi acak huruf
function random_char( $panjang ) { 
	$karakter = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ'; 
	$string = ''; 
	for ( $i = 0; $i < $panjang; $i++ ) { 
		$pos = rand( 0, strlen( $karakter ) - 1 ); 
		$string .= $karakter{$pos}; 
	} 
return $string;
}
 
$get_data = $this->m_home->ambildata();
		$query=$this->db->query("SELECT * FROM tbl_registrasi");
	    $n = $query->num_rows();
$check = $n = $query->num_rows(); // untuk mengecek apakah di table barang "no/ kode" sudah ada atau belum
 
$kd = ''; // mendefinisikan variable kd ( $kd ) dengan value null/ kosong. Hal ini sangatlah penting jika pada suatu kondisi tertentu nilai variable blm di definisikan, maka akan menimbulkan munculnya error/ notice
 
if ( empty( $check ) ) { // Jk kode blm ada maka
	$kd = 1; // kode dimulai dr 1
} else { // jk sudah ada maka
	$kd = $check + 1; // kode sebelumnya ditambah 1.
}
 
?>

<div align="center">
<h3>Tambah Data</h3>
<form method="post">
	

<table >
<tr>
	<td>no</td>
	<td>:</td>
	<td><input type="text" id="no" name="no" value="<?php echo random_char(3) . $get3number . '-' . $kd;  ?>" readonly></td>
</tr>
	<td>nama</td>
	<td>:</td>
	<td><input type="text" id="nama" name="nama"></td>
</tr>
	<td>alamat</td>
	<td>:</td>
	<td><input type="text" id="alamat" name="alamat"></td>
</tr>
</table>

<table>
<tr>
	<td></td>
	<td><input type="submit" id="submit" name="submit"></td>

</tr>
</table>

</form>