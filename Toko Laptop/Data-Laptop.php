<!DOCTYPE html>
<html>
<head>
	<title>DATA LAPTOP</title>
    <style>
    body {
        background-image: url(img/blue.jpg);
        background-size: cover;
    }
    a{
        text-decoration: none;
    }
    </style>
</head>
<body>
<center><h3>DATA PEMBELI</h3>
<table border="1">
    <tr>
        <th>No</th>
        <th>ID_Pembeli</th>
        <th>Nama</th>
        <th>NIK</th>
        <th>Umur</th>
        <th>Jenis Kelamin</th>
        <th>Nomor HP</th>
        <th>Email</th>
        <th>Alamat</th>
    </tr>

    <?php
    include "koneksi.php";
    $no = 1;
    $ambildata = mysqli_query($conn, "SELECT * FROM pembeli");
    while ($tampil = mysqli_fetch_array($ambildata)) {
        echo "
        <tr>
            <td>$no</td>
            <td>$tampil[id_pembeli]</td>
            <td>$tampil[nama]</td>
            <td>$tampil[nik]</td>
            <td>$tampil[umur]</td>
            <td>$tampil[jenis_kelamin]</td>
            <td>$tampil[no_hp]</td>
            <td>$tampil[email]</td>
            <td>$tampil[alamat]</td>
        </tr>";
        $no++;
    }
    ?>
</table><br><br>
<h3>DATA PEMESANAN</h3>
<table border="1">
    <tr>
        <th>No.</th>
        <th>ID Pesan</th>
        <th>Tanggal Pemesanan</th>
        <th>Harga Total</th>
        <th>Diskon</th>
        <th>Total Bayar</th>
        <th>Bonus</th>
    </tr>

    <?php
    include "koneksi.php";
    $no = 1;
    $ambildata = mysqli_query($conn, "SELECT * FROM pesan");
    while ($tampil = mysqli_fetch_array($ambildata)) {
        echo "
        <tr>
            <td>$no</td>
            <td>$tampil[id_pesan]</td>
            <td>$tampil[tgl_pesan]</td>
            <td>$tampil[harga_total]</td>
            <td>$tampil[diskon]</td>
            <td>$tampil[total_bayar]</td>
            <td>$tampil[bonus]</td>
        </tr>";
        $no++;
    }
    ?>
</table><br><br>
<h3>DATA PEMBAYARAN</h3>
<table border="1">
    <tr>
        <th>No</th>
        <th>ID_Pembayaran</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Nomor Kartu</th>
        <th>Metode Pembayaran</th>
        <th>Catatan</th>
    </tr>
    <?php
    include "koneksi.php";
    $no = 1;
    $ambildata = mysqli_query($conn, "SELECT * FROM pembayaran");
    while ($tampil = mysqli_fetch_array($ambildata)) {
        echo "
        <tr>
            <td>$no</td>
            <td>$tampil[id_pembayaran]</td>
            <td>$tampil[nama]</td>
            <td>$tampil[email]</td>
            <td>$tampil[nomor_kartu]</td>
            <td>$tampil[metode_pembayaran]</td>
            <td>$tampil[catatan]</td>
        </tr>";
        $no++;
    }
    ?>
</table><br><br>
<h3>DATA PENGIRIMAN</h3>
<table border="1">
    <tr>
        <th>No.</th>
        <th>ID Pengiriman</th>
        <th>Nama</th>
        <th>No. Telepon</th>
        <th>Alamat</th>
        <th>Paket</th>
        <th>Jasa</th>
        <th>Packing</th>
    </tr>

    <?php
    include "koneksi.php";
    $no = 1;
    $ambildata = mysqli_query($conn, "SELECT * FROM pengiriman");
    while ($tampil = mysqli_fetch_array($ambildata)) {
        echo "
        <tr>
            <td>$no</td>
            <td>$tampil[id_pengiriman]</td>
            <td>$tampil[nama]</td>
            <td>$tampil[no_telepon]</td>
            <td>$tampil[alamat]</td>
            <td>$tampil[paket]</td>
            <td>$tampil[jasa]</td>
            <td>$tampil[packing]</td>
        </tr>";
        $no++;
    }
    ?>
</table><br><br>
<button><a href="Admin.html">Back</button>
</center>
</body>