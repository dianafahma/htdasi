
<?php


/*
 * Buat pendaftaran baru
 */

$response = array();

// cek form
if (isset($_POST['nama']) && isset($_POST['hp']) && isset($_POST['ket']) && isset($_POST['jenis_lapor']) && isset ($_POST['lokasi'])&& isset($_POST['lokasi_detail'])&& isset ($_POST['gambar'])) {
    
    $nama = $_POST['nama'];
    $hp = $_POST['hp'];
    $ket = $_POST['ket'];
	$jenis_lapor  = $_POST['jenis_lapor'];
	$lokasi = $_POST['lokasi'];
	$lokasi_detail = $_POST['lokasi_detail'];
	$gambar= $_POST['gambar'];

    // include db connect
    require_once __DIR__ . '/db_connect.php';

    // konekin db
    $db = new DB_CONNECT();

    // insert ke db
    $result = mysql_query("INSERT INTO orang (nama, hp, ket, jenis_lapor,lokasi,lokasi_detail,gambar) VALUES('$nama', '$hp', '$ket','$jenis_lapor','$lokasi','$lokasi_detail','$gambar')");
	
    // cek data udah masuk belum
    if ($result) {
        // kalo sukses
        $response["success"] = 1;
        $response["message"] = "Laporan anda berhasil";

        // echoing JSON response
        echo json_encode($response);
    } else {
        // fkalo gagal
        $response["success"] = 0;
        $response["message"] = "Sistem mendeteksi kesalahan, silahkan coba lagi";
        
        // echoing JSON response
        echo json_encode($response);
    }
	
} else {
    $response["success"] = 0;
    $response["message"] = "Silahkan lengkapi aksi sebelum memulai permintaan anda";

    // echoing JSON response
    echo json_encode($response);
}
?>
