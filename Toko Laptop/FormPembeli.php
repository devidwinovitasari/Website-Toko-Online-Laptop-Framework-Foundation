<!DOCTYPE html>
<html>
<head>
	<title>Form Data</title>
	<link rel="stylesheet" type="text/css" href="FormData.css">
    <style>
.login {
  width: 400px;
  margin: 0 auto;
  padding: 20px;
  border: 1px solid #aca6a6;
  border-radius: 5px;
  background-color: #ccc6c6;
}

.login label {
  display: block;
  margin-bottom: 5px;
}

.login input[type="text"],
.login input[type="number"],
.login input[type="email"],
.login textarea {
  width: 100%;
  padding: 8px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-bottom: 10px;
}

.login textarea {
  height: 100px;
}

.login button {
  background-color: #4CAF50;
  color: white;
  padding: 10px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  margin-right: 10px;
}
.login button:hover {
  background-color: #61b0ba;
  color: black;
}
.login button a {
  color: white;
  text-decoration: none;
}

.login .tombol {
  text-align: center;
}
</style>

</head>
<body>
	<center><h2>Masukkan Data Anda!</h2></center>
	<div class="login">
		<form action="" method="POST">
			<div>
				<label>Nama</label>
				<input type="text" name="nama" id="nama" required/>
			</div>
			<br>
			<div>
				<label>NIK</label>
				<input type="number" name="nik" id="nik" required/>
			</div>
			<br>
			<div>
				<label>Umur</label>
				<input type="number" name="umur" id="umur" required/>
			</div>
			<br>
			<div>
				<label>Jenis Kelamin</label>
				<input type="text" name="jkl" id="jkl" required/>
			</div>
			<br>
			<div>
				<label>No. HP</label>
				<input type="number" name="nohp" id="nohp" required/>
			</div>
			<br>
			<div>
				<label>Email</label>
				<input type="email" name="email" id="email" required/>
			</div>
			<div>
				<label>Alamat</label>
				<textarea cols="40" rows="5" name="alamat" id="alamat" required></textarea>
			</div>
			<div class="tombol"><center>
				<button type="submit" name="daftar">Pesan</button>
                <button><a href="Hal2.html">Back</a></button>
			</center>
			</div>
		</form>
	</div>
</body>
<?php
	include "koneksi.php";
	if (isset($_POST['daftar'])) {
		$nama = $_POST['nama'];
		$nik = $_POST['nik'];
		$umur = $_POST['umur'];
		$jk = $_POST['jkl'];
		$no = $_POST['nohp'];
		$email = $_POST['email'];
		$alamat = $_POST['alamat'];
		$masuk = mysqli_query($conn, "INSERT INTO pembeli (nama, nik, umur, jenis_kelamin, no_hp, email, alamat) VALUES ('$nama','$nik','$umur','$jk','$no','$email','$alamat')");
		if ($masuk) {
			header("location:FormPemesanan.php");
			exit;
		}
	}
?>
</html>