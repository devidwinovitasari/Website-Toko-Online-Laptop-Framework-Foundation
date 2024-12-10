<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="FormPembayaran.css">
</head>
    <body>
        <form action="" method="post" class="payment-form">
            <div class="form-group">
                <label for="nama">Nama Lengkap</label>
                    <input type="text" id="nama" name="nama" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="nomor-kartu">Nomor Kartu</label>
                    <input type="text" id="nomor-kartu" name="nomor_kartu" required>
            </div>
            <div class="form-group">
                <label for="metode-pembayaran">Metode Pembayaran</label>
                    <select id="metode-pembayaran" name="metode_pembayaran" required>
                        <option value="">Pilih Metode Pembayaran</option>
                        <option value="Visa">Visa</option>
                        <option value="Mastercard">Mastercard</option>
                        <option value="PayPal">PayPal</option>
                    </select>
              </div>
            <div class="form-group">
                <label for="cvv">Catatan</label>
                    <input type="text" id="cvv" name="cvv" required>
            </div>
            <button type="submit" class="btn btn-submit" name="bayar">Submit</button>
          </form>          
    </body>
    <?php
	include "koneksi.php";
	if (isset($_POST['bayar'])) {
		$nama = $_POST['nama'];
		$email = $_POST['email'];
		$nokart = $_POST['nomor_kartu'];
		$metpem = $_POST['metode_pembayaran'];
		$catatan = $_POST['cvv'];
		$masuk = mysqli_query($conn, "INSERT INTO pembayaran (nama, email, nomor_kartu, metode_pembayaran, catatan) VALUES ('$nama','$email','$nokart','$metpem','$catatan')");
		if ($masuk) {
			header("location:FormPengiriman.php");
			exit;
		}
	}
?>
</html>