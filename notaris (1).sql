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

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`username`, `nama_lengkap`, `password`, `status`, `privil`) VALUES
('admin', 'dewi', '21232f297a57a5a743894a0e4a801fc3', 1, 1),
('test2', 'testing', 'ad0234829205b9033196ba818f7a872b', 1, 2),
('udin', 'Mauludin', '6bec9c852847242e384a4d5ac0962ba0', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `instansi`
--

CREATE TABLE `instansi` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `instansi`
--

INSERT INTO `instansi` (`id`, `nama`) VALUES
(1, 'Bank'),
(2, 'Badan Pertahanan Nasional (BPN)'),
(3, 'Kementrian Hukum dan HAM RI'),
(4, 'Perseorangan');

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

--
-- Dumping data for table `klien`
--

INSERT INTO `klien` (`nomor_KTP`, `nama_lengkap`, `tanggalLahir`, `nomor_HP`) VALUES
('3275040612960001', 'andi', '2018-12-08', '08151329'),
('3275040612960012', 'dr Anas', '2009-12-24', '0815132982'),
('3275040612960014', 'dr Ana', '0000-00-00', '081513298756'),
('3275040612960015', 'dfff', '1970-01-01', '081513298756'),
('3275040612960017', 'dary', '2018-11-30', '08151329'),
('3275040612960018', 'budi', '2018-11-30', '0815132982'),
('3275040612960019', 'dr Ana', '2018-06-12', '081513298756'),
('3275040612960020', 'qwe', '2018-01-12', '081513298756'),
('3275040612960021', 'ffffgggg', '2018-11-26', '08151329');

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

--
-- Dumping data for table `log_aktivitas_pegawai`
--

INSERT INTO `log_aktivitas_pegawai` (`id`, `username`, `IP`, `aktivitas`, `waktu`) VALUES
(1, 'udin', '::1', 'Menambah Klien dary', '2018-11-28 06:11:43'),
(2, 'udin', '::1', 'Menambah order pekerjaan waris pak anas', '2018-11-28 06:54:00'),
(4, 'udin', '::1', 'Menambah klien budi', '2018-11-28 11:56:42'),
(5, 'test2', '::1', 'Menambah klien andi', '2018-11-28 11:57:24'),
(6, 'test2', '::1', 'Menambah order pekerjaan waris pak andi', '2018-11-28 12:19:47'),
(7, 'admin', '::1', 'Mengubah data klien ', '2018-11-28 14:43:50'),
(8, 'admin', '::1', 'Mengubah data klien ', '2018-11-28 14:44:04'),
(9, 'admin', '::1', 'Mengubah data klien ', '2018-11-28 14:47:02'),
(10, 'admin', '::1', 'Mengubah data klien ', '2018-11-28 14:50:10'),
(11, 'admin', '::1', 'Mengubah data klien ', '2018-11-28 14:51:08'),
(12, 'admin', '::1', 'Mengubah data klien ', '2018-11-28 14:52:02'),
(13, 'admin', '::1', 'Mengubah data klien ', '2018-11-28 14:52:13'),
(14, 'admin', '::1', 'Mengubah data klien ', '2018-11-28 14:54:03'),
(15, 'admin', '::1', 'Mengubah data klien ', '2018-11-28 14:54:08'),
(16, 'admin', '::1', 'Mengubah data klien ', '2018-11-28 14:54:09'),
(17, 'admin', '::1', 'Mengubah data klien ', '2018-11-28 14:54:25'),
(18, 'admin', '::1', 'Mengubah data klien ', '2018-11-28 14:54:37'),
(19, 'admin', '::1', 'Mengubah data klien ', '2018-11-28 14:54:42'),
(20, 'admin', '::1', 'Mengubah data klien ', '2018-11-28 14:55:14'),
(21, 'admin', '::1', 'Mengubah data klien ', '2018-11-28 14:55:15'),
(22, 'admin', '::1', 'Mengubah data klien ', '2018-11-28 14:55:25'),
(23, 'admin', '::1', 'Mengubah data klien ', '2018-11-28 14:55:26'),
(24, 'udin', '::1', 'Menambah order pekerjaan waris bu ana', '2018-11-28 15:43:29'),
(25, 'test2', '::1', 'Menambah order pekerjaan waris pak anas', '2018-11-28 16:25:54');

-- --------------------------------------------------------

--
-- Table structure for table `orderjob`
--

CREATE TABLE `orderjob` (
  `user_admin` varchar(50) NOT NULL,
  `id_order` int(11) NOT NULL,
  `nomor_KTP` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orderjob`
--

INSERT INTO `orderjob` (`user_admin`, `id_order`, `nomor_KTP`) VALUES
('test2', 6, '3275040612960001'),
('test2', 8, '3275040612960001'),
('udin', 2, '3275040612960021'),
('udin', 5, '3275040612960017'),
('udin', 7, '3275040612960001');

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

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `pekerjaan`, `nama_pekerjaan`, `tgl_mulai`, `tgl_selesai`, `keterangan`, `jenis_pekerjaan`, `id_instansi`, `status`, `progress`) VALUES
(2, 'war', 'waris', '2018-12-11', '2018-12-19', 'warisan', 'PPAT', 3, 3, NULL),
(3, 'waris', 'waris pak anas', '2018-11-26', '2018-12-03', 'warisan', 'Notaris', 2, 1, NULL),
(5, 'waris', 'waris pak anas', '2018-12-03', '2018-12-10', 'aaaaaa', 'PPAT', 3, 2, NULL),
(6, 'waris', 'waris pak andi', '2018-11-26', '2018-12-04', '', 'PPAT', 2, 2, NULL),
(7, 'waris', 'waris bu ana', '2018-12-03', '2018-12-10', '', 'PPAT', 3, 1, NULL),
(8, 'wari', 'waris pak anas', '2018-11-17', '2018-11-30', '', 'PPAT', 3, 1, 'Menunggu verifikasi bu Dewi');

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
-- Dumping data for table `protokol`
--

INSERT INTO `protokol` (`no_protokol`, `tgl_akta`, `no_lemari`, `id_order`, `nama_file`) VALUES
('n-222', '2018-12-19', 'a-1', 6, 'doc1.pdf');

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
