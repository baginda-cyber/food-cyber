-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2019 at 05:00 PM
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
-- Database: `nama_makanan`
--

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `ID` int(11) NOT NULL,
  `Nama` varchar(255) NOT NULL,
  `Komentar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`ID`, `Nama`, `Komentar`) VALUES
(86, 'df', 'ef\r\n'),
(87, 'aji', 'heif'),
(88, 'efe', 'fef'),
(90, 'hdhudehdehhdehedhhedhdeh', 'hdehedjediewhwqhiqewfhu'),
(91, 'kehfh', 'rihhfe'),
(93, 'zzz', 'zzzzzzz'),
(94, 'ghyeu', 'udhfu'),
(95, 'keudgu', 'ufeug'),
(96, 'mohon', 'lama'),
(98, 'djovi', 'iugfeub'),
(99, 'wadug', 'hek'),
(100, 'wadug', 'hek'),
(101, 'eerr', 'e55e5'),
(102, 'michael', 'niceee'),
(103, 'safi', 'akkaka');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `Username` varchar(16) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Password2` varchar(64) NOT NULL,
  `No telepon` varchar(1000) NOT NULL,
  `Email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `Username`, `Password`, `Password2`, `No telepon`, `Email`) VALUES
(96, 'user', '$2y$10$MEXIsX9Rk4cbBzXKeKqVSecR6gzHvn.sinfBavF87RjXm7PYafV8u', 'admin', 'user@gmail.com', '12312'),
(98, 'qs', '$2y$10$3/cOganIjH19S/oGeXCiHenBgdwg3jA1S9u5TA0x6E2HXhVxJVDCS', 'qs', 'qs', '12'),
(99, 'sa', '$2y$10$YQMok0PHDx8MaW41uzlDwOU237eI6URYKsA/.usQMdQVP5hJjpLkK', 'sa', 'sa', '12'),
(100, 'ss', '$2y$10$gXeRFlnAM4xE4Q8qPkv/cONbn8erNr6Sx2CdR5PR2dKxk9EBN6Kd6', 'ss', 'ss', '12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
