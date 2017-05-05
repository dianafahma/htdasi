1. Jalankan file test.php (http://localhost/CodeIgniter-2.2.1/oracle_connection_test/test.php)
2. Jika sukses maka akan tampil pesan 'Koneksi Oracle sukses'
3. Jika error :
   A. Fatal error: Call to undefined function oci_connect() in ....
      solusi :
      - buka file php.ini di folder C:\xampp\php (jika tidak ada bacalah note di bawah)
      - cari ;extension=php_oci8.dll dan ;extension=php_oci8_11g.dll
      - hapus tanda titik komanya (;)
      - restart service Apache
   B. Warning: oci_connect(): ORA-12514: TNS:listener does not currently know of service requested in connect descriptor in ...
      solusi : 
      - buka file tnsnames.ora di %ORACLE_HOME%\network\ADMIN (%ORACLE_HOME% = C:\oraclexe\app\oracle\product\11.2.0\server)  
      - samakan HOST, PORT dan SERVICE_NAME di test_connect_oracle.php dengan tnsnames.ora  

---------------------------------------------------------------
Note : 
Cara mengetahui lokasi file php.ini di xampp
File php.ini di XAMPP biasanya terletak di C:\xampp\php, 
namun pada beberapa versi xampp yang lain lokasinya berbeda, 
untuk mengetahui lokasi file php.ini lakukan langkah2 berikut :
1. buatlah file php misal phpinfo.php di htdocs.
2. copy script berikut : <?php phpinfo(); ?> ke file phpinfo.php. Save file 
3. jalankan file tersebut (http://localhost/phpinfo.php)
4. cari Loaded Configuration File untuk mengetahui lokasi file php.ini