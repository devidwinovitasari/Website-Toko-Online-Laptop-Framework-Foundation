<?php
error_reporting(0);
    if (isset($_POST['submit'])) {
        $nama = $_POST['nama'];
        $notel = $_POST['notel'];
        $alamat = $_POST['alamat'];
        $paket = $_POST['paket'];
        $jasa = $_POST['jasa'];  
        $packing = $_POST['packing'];  
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initialscale=1.0">
<title>LepiStore</title>
<style>
    body {
        background-image: url("img/blue.jpg");
        background-size: cover;
    }
    .container{
        margin: 50px auto;
        width: max-content;
        background-color: transparent;
        box-shadow: 0px 0px 10px 10px #000000;
    }
    .container h2{
        background-color:transparent;
        box-shadow: 0px 0px 5px 5px #000000;
    }
    .besar button{
        width:8rem;
        height:2rem;
        border-radius:10ch;
        box-shadow: 0px 0px 5px 5px #000000;
    }
    button:hover{
        background-color:blue;
    }
    a{
        text-decoration: none;
        color: black;
    }
    input[type="text"],
    input[type="number"],
    input[type="email"],
    input[type="date"],
    select,
    textarea {
    width: 100%;
    padding: 5px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-bottom: 5px;
    }
</style>
</head>
<body>
    <div class="container">
    <table cellpadding="5"><caption><h2>Form Pengiriman</h2></caption>
        <form action="" method="post">
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama" id="nama" value="<?=$nama; ?>" required></td>
            </tr>
            <tr>
                <td>No. Telepon</td>
                <td>:</td>
                <td><input type="number" name="notel" id="notel" min="0" <?=$notel; ?> required></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><input type="text" name="alamat" id="alamat" value="<?=$alamat; ?>" required></td>
            </tr>
            <tr>
                <td>Pengambilan Paket</td>
                <td>:</td>
                <td>
                    <select name="paket" id="paket" value="<?=$paket; ?>" required>
                        <option hidden >Silahkan Pilih</option>
                        <option>Antar Ke Alamatmu</option>
                        <option>Ambil Di Tempat</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Pilih Jasa Pengiriman</td>
                <td>:</td>
                <td>
                    <select name="jasa" id="jasa" value="<?=$jasa; ?>" required>
                        <option hidden >Silahkan Pilih</option>
                        <option>Regular (3-7 Hari)</option>
                        <option>Hemat (4-10 Hari)</option>
                        <option>Same Day (1 Hari)</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Packing</td>
                <td>:</td>
                <td>
                    <select name="packing" id="packing" value="<?=$packing; ?>" required>
                        <option hidden >Silahkan Pilih</option>
                        <option>&nbsp;Bubble Wrap</option>
                        <option>&nbsp;Plastik Sedang</option>
                        <option>&nbsp;Plastik Tebal</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td class="besar">
                    <button type="submit" name="submit"><i><b>Submit</b></i></button>
                    <button type="submit" name="reset"><i><b>Reset</b></i></button>
                    <button><a href="index.html">Back</button>
                </td>
            </tr>
    </form>
    </table>
    </div>
<?php
	include "koneksi.php";
	if (isset($_POST['submit'])) {
		$nama = $_POST['nama'];
		$notel = $_POST['notel'];
		$alamat = $_POST['alamat'];
		$paket = $_POST['paket'];
		$jasa = $_POST['jasa'];
        $packing = $_POST['packing'];
		$masuk = mysqli_query($conn, "INSERT INTO pengiriman (nama, no_telepon, alamat, paket, jasa, packing) VALUES ('$nama','$notel','$alamat','$paket','$jasa','$packing')");
	}
?>
</body>
</html>