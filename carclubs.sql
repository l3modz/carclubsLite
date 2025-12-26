-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 27, 2025 at 05:06 AM
-- Server version: 8.0.42-0ubuntu0.20.04.1
-- PHP Version: 7.4.3-4ubuntu2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carclubs`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_password`
--

CREATE TABLE `tb_password` (
  `judul` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT '',
  `id_user` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `passwd` varchar(225) NOT NULL,
  `kategori` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `url` varchar(225) NOT NULL,
  `deskripsi` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_password`
--

INSERT INTO `tb_password` (`judul`, `id_user`, `passwd`, `kategori`, `url`, `deskripsi`) VALUES
('pias', 'BK 2581 ABTC', 'bFkxME9iRTVwQ3V5RUp6N2RMRExUeWxXNzZxTjNRZi9wbTlhSkVEWHlHVHUvMDdaNGp1YnlCL0NRK0lLdDdTOQ==', 'Etios Valco', 'https://api.whatsapp.com/send/?phone=6281269107325&text=pias...', 'milk coffee, coding for goodness of humankind.'),
('VmJ1NnF4ek5WUnI1M3F6ZXVMY0FTM0dUVzkxMzRGbDdOWU5UcFJIMDQzbkh2T0hGUmRTMjdkN0hpS1dxMGJWYg==', 'VmJ1NnF4ek5WUnI1M3F6ZXVMY0FTM0dUVzkxMzRGbDdOWU5UcFJIMDQzbkh2T0hGUmRTMjdkN0hpS1dxMGJWYg==', 'VmJ1NnF4ek5WUnI1M3F6ZXVMY0FTM0dUVzkxMzRGbDdOWU5UcFJIMDQzbkh2T0hGUmRTMjdkN0hpS1dxMGJWYg==', '25f2bf8046aa28e9149941592bc18b5a', '25f2bf8046aa28e9149941592bc18b5a', '25f2bf8046aa28e9149941592bc18b5a');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` varchar(10) NOT NULL,
  `nama_user` varchar(64) NOT NULL,
  `password` varchar(255) NOT NULL,
  `hak_akses` varchar(16) NOT NULL,
  `aktif` varchar(1) NOT NULL,
  `lastlogin` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama_user`, `password`, `hak_akses`, `aktif`, `lastlogin`) VALUES
('admin', 'Administrator', '21232f297a57a5a743894a0e4a801fc3', 'Admin', 'Y', '2025-12-27 04:43:32am'),
('staff', 'Staff', '1253208465b1efa876f982d8a9e73eef', 'staff', 'Y', '2025-12-27 02:47:19am');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_password`
--
ALTER TABLE `tb_password`
  ADD PRIMARY KEY (`judul`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
