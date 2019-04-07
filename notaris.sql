-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2018 at 03:58 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `notaris`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `username` varchar(50) NOT NULL,
  `nama_lengkap` varchar(100) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `status` tinyint(1) DEFAULT '0',
  `privil` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `instansi`
--

CREATE TABLE `instansi` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `klien`
--

CREATE TABLE `klien` (
  `nomor_KTP` varchar(16) NOT NULL,
  `nama_lengkap` varchar(100) DEFAULT NULL,
  `tanggalLahir` date DEFAULT NULL,
  `nomor_HP` varchar(14) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `log_aktivitas_pegawai`
--

CREATE TABLE `log_aktivitas_pegawai` (
  `id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `IP` varchar(25) DEFAULT NULL,
  `aktivitas` varchar(100) DEFAULT NULL,
  `waktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orderjob`
--

CREATE TABLE `orderjob` (
  `user_admin` varchar(50) NOT NULL,
  `id_order` int(11) NOT NULL,
  `nomor_KTP` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `pekerjaan` varchar(75) DEFAULT NULL,
  `nama_pekerjaan` varchar(200) DEFAULT NULL,
  `tgl_mulai` date DEFAULT NULL,
  `tgl_selesai` date DEFAULT NULL,
  `keterangan` varchar(100) DEFAULT NULL,
  `jenis_pekerjaan` varchar(7) DEFAULT NULL,
  `id_instansi` int(11) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `progress` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `protokol`
--

CREATE TABLE `protokol` (
  `no_protokol` varchar(15) NOT NULL,
  `tgl_akta` date DEFAULT NULL,
  `no_lemari` varchar(10) DEFAULT NULL,
  `id_order` int(11) DEFAULT NULL,
  `nama_file` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `instansi`
--
ALTER TABLE `instansi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `klien`
--
ALTER TABLE `klien`
  ADD PRIMARY KEY (`nomor_KTP`);

--
-- Indexes for table `log_aktivitas_pegawai`
--
ALTER TABLE `log_aktivitas_pegawai`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `orderjob`
--
ALTER TABLE `orderjob`
  ADD PRIMARY KEY (`user_admin`,`id_order`,`nomor_KTP`),
  ADD KEY `id_order` (`id_order`),
  ADD KEY `nomor_KTP` (`nomor_KTP`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_instansi` (`id_instansi`);

--
-- Indexes for table `protokol`
--
ALTER TABLE `protokol`
  ADD PRIMARY KEY (`no_protokol`),
  ADD KEY `id_order` (`id_order`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `instansi`
--
ALTER TABLE `instansi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `log_aktivitas_pegawai`
--
ALTER TABLE `log_aktivitas_pegawai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `log_aktivitas_pegawai`
--
ALTER TABLE `log_aktivitas_pegawai`
  ADD CONSTRAINT `log_aktivitas_pegawai_ibfk_1` FOREIGN KEY (`username`) REFERENCES `akun` (`username`);

--
-- Constraints for table `orderjob`
--
ALTER TABLE `orderjob`
  ADD CONSTRAINT `orderjob_ibfk_1` FOREIGN KEY (`user_admin`) REFERENCES `akun` (`username`),
  ADD CONSTRAINT `orderjob_ibfk_2` FOREIGN KEY (`id_order`) REFERENCES `orders` (`id`),
  ADD CONSTRAINT `orderjob_ibfk_3` FOREIGN KEY (`nomor_KTP`) REFERENCES `klien` (`nomor_KTP`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`id_instansi`) REFERENCES `instansi` (`id`);

--
-- Constraints for table `protokol`
--
ALTER TABLE `protokol`
  ADD CONSTRAINT `protokol_ibfk_1` FOREIGN KEY (`id_order`) REFERENCES `orders` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
