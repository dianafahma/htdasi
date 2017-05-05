<?php 

		session_start();
		$username = "";
		$password = "";
		if (isset($_POST['username']) && isset($_POST['password'])) {
			$un = $_POST['username'];
			$pw = $_POST['password'];
			$cn = @mysql_connect("localhost","root", "") or die("Gagal konek ke Mysql");
			mysql_select_db("db_rendy") or die("Gagal memilih database");
			$query = "SELECT * FROM login WHERE username = '$un' AND password = '$pw'";
			$hasil = mysql_query($query) or die ("Gagal melakukan query");
				if ($hasil !=false) {
					if(mysql_num_rows($hasil)==1){
						$username = $_POST['username'];
						$password = $_POST['password'];
						$_SESSION['username'] = $_POST['username'];
						$_SESSION['password'] = $_POST['password'];
					};
				};
		};
		
	 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>

<?php
	if(empty($username)){
		if(isset($_POST['username']) || isset($_POST['password'])){
			echo "<p>Username dan Password yang anda ketik salah !!</p>";
		};
	}
?>
<form name="login_form" method="POST" action="login.php">
<table>
	<tr>
		<td>
			<label>Username :</label>
		</td>
		<td>
			<input type="text" id="username" name="username">

		</td>
	</tr>
	<tr>
		<td>
			<label>Password : </label>
		</td>
		<td>
			<input type="password" id="password" name="password">

		</td>
	</tr>
</table>

<button name="test" id="test">Test</button>
</form>

<?php
	else{
		?>
		<p>Selamat !! Anda sukses Login</p>
		<?php
	};
?>
</body>
</html>