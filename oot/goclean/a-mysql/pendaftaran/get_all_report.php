<?php

/*
 * kode untuk tampilak semua produk, pada halaman home
 */

$response = array();


// include db connect class
require_once __DIR__ . '/db_connect.php';

// ckonekin ke db
$db = new DB_CONNECT();

//  get by pendaftaran
$result = mysql_query("SELECT *FROM orang") or die(mysql_error());

// cek
if (mysql_num_rows($result) > 0) {
    // looping hasil
    // pendaftaran node
    $response["orang"] = array();
    
    while ($row = mysql_fetch_array($result)) {
        $orang = array();
        $orang["id"] = $row["id"];
        $orang["nama"] = $row["nama"];
        $orang["hp"] = $row["hp"];
        $orang["ket"] = $row["ket"];
        $orang["lokasi"] = $row["lokasi"];
        $orang["lokasi_detail"] = $row["gambar"];
		$orang["gambar"] = $row["gambar"];



        // masukan pendaftaran pada $response
        array_push($response["orang"], $orang);
    }
    // sukses
    $response["success"] = 1;

    // echo JSON response
    echo json_encode($response);
} else {
    $response["success"] = 0;
    $response["message"] = "Tidak ada data yang ditemukan";

    echo json_encode($response);
}
?>
