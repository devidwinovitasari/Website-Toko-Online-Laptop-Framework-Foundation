-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2023 at 03:47 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laptop`
--

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nomor_kartu` varchar(50) NOT NULL,
  `metode_pembayaran` varchar(50) NOT NULL,
  `catatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`id_pembayaran`, `nama`, `email`, `nomor_kartu`, `metode_pembayaran`, `catatan`) VALUES
(1, 'Tri Ayuningtyas', 'Rozikhin@gmail.com', '8898889', 'Mastercard', 'hhhkkjjnnn'),
(2, 'Tri Ayuningtyas', 'Rozikhin@gmail.com', '92982882', 'Visa', 'kakasjjsjjaj'),
(3, 'Arum Rahmadhani', 'Rozikhin@gmail.com', '92982882', 'PayPal', 'kakkakakkak');

-- --------------------------------------------------------

--
-- Table structure for table `pembeli`
--

CREATE TABLE `pembeli` (
  `id_pembeli` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nik` varchar(50) NOT NULL,
  `umur` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `no_hp` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pembeli`
--

INSERT INTO `pembeli` (`id_pembeli`, `nama`, `nik`, `umur`, `jenis_kelamin`, `no_hp`, `email`, `alamat`) VALUES
(1, 'Devi Dwi Novitasari', '220441100090', '18', 'perempuan', '089529775235', 'devidwi1809@gmail.com', 'Lamongan'),
(2, 'DEVI DWI NOVITASARI', '898888', '9', 'perempuan', '9883', 'devidwi1809@gmail.com', 'lmo'),
(3, 'Tri Ayuningtyas', '52552', '17', 'perempuan', '02992992', 'Rozikhin@gmail.com', 'mojokerto'),
(4, 'Arum Rahmadhani', '2525525', '24', 'perempuan', '82828828', 'Rozikhin@gmail.com', 'lmg');

-- --------------------------------------------------------

--
-- Table structure for table `pengiriman`
--

CREATE TABLE `pengiriman` (
  `id_pengiriman` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `no_telepon` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `paket` varchar(50) NOT NULL,
  `jasa` varchar(50) NOT NULL,
  `packing` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pengiriman`
--

INSERT INTO `pengiriman` (`id_pengiriman`, `nama`, `no_telepon`, `alamat`, `paket`, `jasa`, `packing`) VALUES
(1, 'DEVI DWI NOVITASARI', '089529775235', 'lmg', 'Antar Ke Alamatmu', 'Hemat (4-10 Hari)', ' Plastik Sedang'),
(2, 'DEVI DWI NOVITASARI', '983873773', 'sidoarjo', 'Ambil Di Tempat', 'Hemat (4-10 Hari)', ' Bubble Wrap'),
(3, 'Tri Ayuningtyas', '028299292', 'mojokerto', 'Antar Ke Alamatmu', 'Hemat (4-10 Hari)', ' Plastik Tebal'),
(4, 'Tri Ayuningtyas', '028299292', 'mojokerto', 'Antar Ke Alamatmu', 'Hemat (4-10 Hari)', ' Plastik Tebal'),
(5, 'Tri Ayuningtyas', '93883883', 'mojokerto', 'Ambil Di Tempat', 'Hemat (4-10 Hari)', ' Plastik Sedang'),
(6, 'Tri Ayuningtyas', '9988', 'mojokerto', 'Ambil Di Tempat', 'Regular (3-7 Hari)', ' Plastik Sedang'),
(7, 'DEVI DWI NOVITASARI', '233', 'sidoarjo', 'Antar Ke Alamatmu', 'Regular (3-7 Hari)', ' Bubble Wrap'),
(8, 'Arum Rahmadhani', '93848848', 'lmg', 'Antar Ke Alamatmu', 'Hemat (4-10 Hari)', ' Bubble Wrap');

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `id_pesan` int(11) NOT NULL,
  `tgl_pesan` varchar(50) NOT NULL,
  `harga_total` varchar(50) NOT NULL,
  `diskon` varchar(50) NOT NULL,
  `total_bayar` varchar(50) NOT NULL,
  `bonus` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`id_pesan`, `tgl_pesan`, `harga_total`, `diskon`, `total_bayar`, `bonus`) VALUES
(1, '2023-06-22', '127188000', '12718800', '114469200', 'Headseat + Cassing + Stiker Lucu'),
(2, '2023-06-16', '23100000', '1155000', '21945000', 'Stiker lucu'),
(3, '2023-06-11', '20864000', '1669120', '19194880', 'cassing + Stiker lucu'),
(4, '2023-07-08', '51600000', '5160000', '46440000', 'Headseat + Cassing + Stiker Lucu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`);

--
-- Indexes for table `pembeli`
--
ALTER TABLE `pembeli`
  ADD PRIMARY KEY (`id_pembeli`);

--
-- Indexes for table `pengiriman`
--
ALTER TABLE `pengiriman`
  ADD PRIMARY KEY (`id_pengiriman`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id_pesan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pembeli`
--
ALTER TABLE `pembeli`
  MODIFY `id_pembeli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pengiriman`
--
ALTER TABLE `pengiriman`
  MODIFY `id_pengiriman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
