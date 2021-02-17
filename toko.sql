-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2019 at 05:04 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toko`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` int(11) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `Username`, `Password`, `nama_lengkap`) VALUES
(1, 'admin', 'user', 'baginda');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `nomor telepon` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id`, `email`, `Password`, `nama_lengkap`, `nomor telepon`) VALUES
(1, 'bagindaperfect15@gmail.com', 'baginda', 'baginda siahaan', '082274850709'),
(2, 'sandi@gmail.com', 'sandi', 'sandi', '082274850700');

-- --------------------------------------------------------

--
-- Table structure for table `pembelian`
--

CREATE TABLE `pembelian` (
  `ID` int(11) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `tanggal_pembelian` date NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembelian`
--

INSERT INTO `pembelian` (`ID`, `id_pelanggan`, `tanggal_pembelian`, `total`) VALUES
(1, 1, '2019-05-11', 100000),
(2, 1, '2019-05-12', 200000),
(4, 2, '2019-05-10', 120000),
(5, 2, '2019-05-13', 20000);

-- --------------------------------------------------------

--
-- Table structure for table `pembelian_produk`
--

CREATE TABLE `pembelian_produk` (
  `ID_pembelian_produk` int(11) NOT NULL,
  `id_pembelian` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembelian_produk`
--

INSERT INTO `pembelian_produk` (`ID_pembelian_produk`, `id_pembelian`, `id_produk`, `jumlah`) VALUES
(1, 1, 1, 1),
(2, 1, 2, 1),
(4, 2, 2, 1),
(5, 1, 2, 1),
(6, 2, 1, 3),
(7, 2, 1, 4);

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `ID` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `harga` int(11) NOT NULL,
  `berat` int(11) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `Deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`ID`, `Name`, `harga`, `berat`, `foto`, `Deskripsi`) VALUES
(12, 'Nasi Ayam Geprek', 25000, 497, 'nasi-ayam-geprek-origin.jpg', 'Merupakan makanan yang memiliki cita rasa yang nikmat'),
(13, 'Pasta', 23000, 345, 'Pasta-HD-Wallpaper.jpg', 'Rasa yang diberikan menggugah selera'),
(15, 'Capcay', 20000, 300, 'resep+capcay.Jpeg', 'Perpaduan aneka ragam sayur, daging dan udang yang memberikan rasa yang gurih.'),
(16, 'Mie Aceh', 18000, 290, 'mie.jpg', 'Merupakan mie kuning tebal dengan irisan daging sapi, kambing, atau makanan laut.'),
(17, 'Seafood', 20000, 230, 'seaf.jpg', 'Beragam makanan laut yang disajikan di satu makanan'),
(18, 'Sop Daging', 30000, 234, 'sop-daging-1255x706.jpg', 'Sop ini merupakan sop yang terbuat dari iga sapi'),
(19, 'Nasi Padang', 10000, 5, 'seaf.jpg', ' Nasi Padangmerupakan makanan Khas dari daerah Sumatra Barat');

-- --------------------------------------------------------

--
-- Table structure for table `produkminuman`
--

CREATE TABLE `produkminuman` (
  `ID` int(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `harga` int(255) NOT NULL,
  `berat` int(64) NOT NULL,
  `foto` varchar(1000) NOT NULL,
  `Deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produkminuman`
--

INSERT INTO `produkminuman` (`ID`, `Name`, `harga`, `berat`, `foto`, `Deskripsi`) VALUES
(1, 'Jus Buah Naga', 12000, 233, 'buahnaga.jpg', 'Minuman nikmat yang kaya vitamin B serta vitamin C.'),
(2, 'Es Buah', 15000, 231, 'gambar-es-buah-segar_www.buahaz.com_.jpg', 'Minuman yang terbuat dari berbagai jenis buah'),
(4, 'Jus Alpukat', 20000, 232, 'jusalpukat.jpeg', 'Jus yang hanya terdiri dari satu buah, dan dijadikan jus'),
(5, 'Capucino', 11000, 200, 'latte-macchiato-3669136__340.jpg', 'adalah minuman khas  italia yang terbuat dari expresso dan susu'),
(6, 'Kopi Hitam', 7000, 123, 'Manfaat-Minum-Kopi-Hitam-Tanpa-Gula.jpg', 'Minuman yang terbuat dari biji kopi dan khas thailand'),
(7, 'Vanilla Milkshake', 14000, 123, 'vanila.jpg', ' Minuman yang dicampur dari susu vanilla dan es');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `pembelian_produk`
--
ALTER TABLE `pembelian_produk`
  ADD PRIMARY KEY (`ID_pembelian_produk`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `produkminuman`
--
ALTER TABLE `produkminuman`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pembelian`
--
ALTER TABLE `pembelian`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pembelian_produk`
--
ALTER TABLE `pembelian_produk`
  MODIFY `ID_pembelian_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `produkminuman`
--
ALTER TABLE `produkminuman`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
