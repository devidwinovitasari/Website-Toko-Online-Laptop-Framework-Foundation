<?php
error_reporting(0);
    if (isset($_POST['submit'])) {
        $nama = $_POST['nama'];
        $harga = $_POST['harga'];
        $jumlah = $_POST['jumlah'];
        $tgl = $_POST['tgl'];
        $harga = intval($harga);
        $jumlah = intval($jumlah);
        $harga_total = $harga * $jumlah;
        switch ($jumlah) {
            case $jumlah>=2 && $jumlah<3:
                $diskon = 5/100 * $harga_total;
                $bonus = "Stiker lucu";
                $total_bayar = $harga_total - $diskon;
            break;
            case $jumlah>=3 && $jumlah<5:
                $diskon = 8/100 * $harga_total;
                $bonus = "cassing + Stiker lucu";
                $total_bayar = $harga_total - $diskon;
            break; 
            case $jumlah>=5:
                $diskon = 10/100 * $harga_total;
                $bonus = "Headseat + Cassing + Stiker Lucu";
                $total_bayar = $harga_total - $diskon;
            break; 
            default:
                $diskon = 1/100 * $harga_total;
                $bonus = "Tidak mendapatkan Bonus";
                $total_bayar = $harga_total - $diskon;
            break;
            }
    }
    elseif (isset($_POST['reset'])) {
        $nama = "";
        $tgl = "";
        $harga = "";
        $jumlah = "";
        $harga_total = "";
        $diskon = "";
        $total_bayar = "";
        $bonus = "";
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
    <table cellpadding="5"><caption><h2>Form Pemesanan</h2></caption>
        <form action="" method="post">
            <tr>
                <td>Nama Tipe</td>
                <td>:</td>
                <td>
                    <select name="nama" id="nama"onchange="price()" required>
                        <option hidden >Silahkan pilih Tipe</option>
                        <option value="24500000" <?php if($nama==24500000){echo("selected");} ?>>Apple Macbook Pro 16-inch (2023)</option>
                        <option value="7000000" <?php if($nama==7000000){echo("selected");} ?>>Asus Vivobook 14X M1403 (2022)</option>
                        <option value="11550000" <?php if($nama==11550000){echo("selected");} ?>>Asus Vivobook 15 (A1502) A1502Za</option>
                        <option value="8429900" <?php if($nama==8429900){echo("selected");} ?>>Asus Vivobook A416JA0-VIPS321</option>
                        <option value="11457700" <?php if($nama==11457700){echo("selected");} ?>>Asus Vivobook S 14-inch OLED</option>
                        <option value="4864000" <?php if($nama==4864000){echo("selected");} ?>>HP 14s FQ1032AU</option>
                        <option value="3894000" <?php if($nama==3894000){echo("selected");} ?>>HP 14s-dk1524AU (2021)</option>
                        <option value="11300000" <?php if($nama==11300000){echo("selected");} ?>>HP Chromebook 11 G8 EE (2021)</option>
                        <option value="10649000" <?php if($nama==10649000){echo("selected");} ?>>HP Victus 15-incsh Gaming</option>
                        <option value="10000000" <?php if($nama==10000000){echo("selected");} ?>>Microsoft Surface Pro 8 (2020)</option>
                        <option value="15963000" <?php if($nama==15963000){echo("selected");} ?>>Microsoft Surface Pro 9</option>
                        <option value="10599000" <?php if($nama==10599000){echo("selected");} ?>>Asus Core 17 Pro Tahun (2022)</option>
                        <option value="7800000" <?php if($nama==7800000){echo("selected");} ?>>Lenovo Thinkpad Touchscreen Yoga</option>
                        <option value="5216000" <?php if($nama==5216000){echo("selected");} ?>>Dell 17</option>
                        <option value="5600000" <?php if($nama==5600000){echo("selected");} ?>>Lenovo T470s 17 6th Touch</option>
                        <option value="4300000" <?php if($nama==4300000){echo("selected");} ?>>Dell Latitude 7490 Tahun 2020</option>
                        <option value="5650000" <?php if($nama==5650000){echo("selected");} ?>>Lenovo X1 Yoga</option>
                        <option value="12450000" <?php if($nama==12450000){echo("selected");} ?>>Lenovo T470s 17 7th</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Tanggal Pemesanan</td>
                <td>:</td>
                <td><input type="date" name="tgl" value="<?= $tgl; ?>" required></td>
            </tr>
            <tr>
                <td>Harga</td>
                <td>:</td>
                <td>Rp. <input type="text" name="harga" id="harga"size="16" value="<?=$harga; ?>" readonly></td>
            </tr>
            <tr>
                <td>Jumlah Yang Dipesan</td>
                <td>:</td>
                <td class="ukuran1"><input type="number" min="1" name="jumlah" value="<?= $jumlah; ?>" required> Unit</td>
            </tr>
            <tr>
                <td class="besar">
                    <button type="submit" name="submit"><i><b>Pesan</b></i></button>
                    <button type="submit" name="reset"><i><b>Reset</b></i></button>
                </td>
            </tr>
        </form>
    <form action="" method="POST">
            <tr>
                <td>Tanggal Pemesanan</td>
                <td>:</td>
                <td><input type="date" id="tgl_pesan" name="tgl" value="<?= $tgl; ?>" required></td>
            </tr>
            <tr>
                <td>Harga Total</td>
                <td>:</td>
                <td>Rp. <input type="text" id="harga_total" name="total" size="16"value="<?= $harga_total; ?>" readonly></td>
            </tr>
            <tr>
                <td>Diskon</td>
                <td>:</td>
                <td>Rp. <input type="text" id="diskon" name="diskon" size="16"value="<?= $diskon; ?>" readonly></td>
            </tr>
            <tr>
                <td>Total Bayar</td>
                <td>:</td>
                <td>Rp. <input type="text" id="jumlah" name="totalbayar"size="16" value="<?= $total_bayar; ?>" readonly></td>
            </tr>
            <tr>
                <td>Bonus</td>
                <td>:</td>
                <td>
                <textarea name="bonus" id="bonus" cols="50" rows="1" readonly><?= $bonus; ?></textarea></td>
            </tr>
            <td class="besar">
                    <button type="submit" name="ada"><i><b>Oke</b></i></button>
                    <button><a href="FormPembayaran.php">Bayar</button>
                    <button><a href="Hal2.html">Back</button>
            </td>
    </form>
    </table>
    </div>
<?php
	include "koneksi.php";
	if (isset($_POST['ada'])) {
		$tgl_pesan = $_POST['tgl'];
		$harga_total = $_POST['total'];
		$diskon = $_POST['diskon'];
		$jumlah = $_POST['totalbayar'];
		$bonus = $_POST['bonus'];
		$masuk = mysqli_query($conn, "INSERT INTO pesan (tgl_pesan, harga_total, diskon, total_bayar, bonus) VALUES ('$tgl_pesan','$harga_total','$diskon','$jumlah','$bonus')");
	}
?>
<script type="text/javascript">
    function price() {
        var tes = document.getElementById("nama").value;document.getElementById("harga").value = tes;
    }
</script>

</body>
</html>