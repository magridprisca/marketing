-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 29, 2018 at 02:21 PM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tender_mark`
--

-- --------------------------------------------------------

--
-- Table structure for table `check_process`
--

CREATE TABLE `check_process` (
  `pro_code` varchar(10) NOT NULL,
  `process_code` varchar(10) NOT NULL,
  `confirmation` tinyint(1) NOT NULL,
  `process_date` date NOT NULL,
  `username` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `client_code` varchar(20) NOT NULL,
  `client_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`client_code`, `client_name`) VALUES
('kai', 'PT Kereta Api Indonesia'),
('TNIAL', 'Tentara Nasional Indonesia Angkatan laut');

-- --------------------------------------------------------

--
-- Table structure for table `process`
--

CREATE TABLE `process` (
  `process_code` varchar(10) NOT NULL,
  `process_type` varchar(20) NOT NULL,
  `process_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `process`
--

INSERT INTO `process` (`process_code`, `process_type`, `process_name`) VALUES
('1', 'Proses', 'Tahap Pralelang'),
('11', 'Sub Proses', 'Promosi (Market Dvelopment)'),
('12', 'Sub Proses', 'Opsreq'),
('13', 'Sub Proses', 'Design'),
('14', 'Sub Proses', 'Presentasi'),
('15', 'Sub Proses', 'Sourcing Harga'),
('16', 'Sub Proses', 'Penyimpanan Dokumen Lelang (SDM, Fasilitas, Finansial)'),
('2', 'Proses', 'Tahap Lelang'),
('21', 'Sub Proses', 'Pengumuman Lelang'),
('22', 'Sub Proses', 'Pendaftaran Lelang'),
('23', 'Sub Proses', 'Tahap Prakualifikasi'),
('2301', 'Sub-Sub Proses', 'Pemasukan Dokumen Prakualifikasi'),
('2302', 'Sub-Sub Proses', 'Pembukaan Dokumen Prakualifikasi'),
('2303', 'Sub-Sub Proses', 'Pembuktian Klualifikasi'),
('2304', 'Sub-Sub Proses', 'Hasil Prakualifikasi'),
('24', 'Sub Proses', 'Pengambilan Dokumen Lelang'),
('25', 'Sub Proses', 'Aanwizjing'),
('26', 'Sub Proses', 'Tahap Pemasukan Dokumen'),
('2601', 'Sub-Sub Proses', 'Pemasukan Dokumen Penawaran Administrasi dan Teknis'),
('2602', 'Sub-Sub Proses', 'Pembukaan Dokumen Administrasi dan Teknis'),
('2603', 'Sub-Sub Proses', 'Evaluasi Administrasi dan Teknis'),
('2604', 'Sub-Sub Proses', 'Klarifikasi Administrasi dan Teknis'),
('2605', 'Sub-Sub Proses', 'Negoisasi Administrasi dan Teknis'),
('2606', 'Sub-Sub Proses', 'Pengumuman Hasil Administrasi dan Teknis'),
('2607', 'Sub-Sub Proses', 'Pemasukan Penawaran Harga'),
('2608', 'Sub-Sub Proses', 'Evaluasi Harga'),
('2609', 'Sub-Sub Proses', 'Negosiasi Harga'),
('2610', 'Sub-Sub Proses', 'Pengumuman Pemenang'),
('3', 'Proses', 'Tahap Kontrak'),
('31', 'Sub Proses', 'SPMK (Penetapan Pemenang)'),
('32', 'Sub Proses', 'Pembahasan Kontrak'),
('33', 'Sub Proses', 'Penandatanganan Kontrak'),
('34', 'Sub Proses', 'Efektif Kontrak');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `pro_code` varchar(10) NOT NULL,
  `pro_name` varchar(30) NOT NULL,
  `pro_date` date NOT NULL,
  `clientID` varchar(10) NOT NULL,
  `promosi` tinyint(1) NOT NULL,
  `opsreq` tinyint(1) NOT NULL,
  `design` tinyint(1) NOT NULL,
  `presentasi` tinyint(1) NOT NULL,
  `sourcing_harga` tinyint(1) NOT NULL,
  `penyiapanDL` tinyint(1) NOT NULL,
  `pengumumanL` tinyint(1) NOT NULL,
  `pendaftaranL` tinyint(1) NOT NULL,
  `prakualifikasi1` tinyint(1) NOT NULL,
  `prakualifikasi2` tinyint(1) NOT NULL,
  `prakualifikasi3` tinyint(1) NOT NULL,
  `prakualifikasi4` tinyint(1) NOT NULL,
  `pengambilanDL` tinyint(1) NOT NULL,
  `aanwizjing` tinyint(1) NOT NULL,
  `pemasukanD1` tinyint(1) NOT NULL,
  `pemasukanD2` tinyint(1) NOT NULL,
  `pemasukanD3` tinyint(1) NOT NULL,
  `pemasukanD4` tinyint(1) NOT NULL,
  `pemasukanD5` tinyint(1) NOT NULL,
  `pemasukanD6` tinyint(1) NOT NULL,
  `pemasukanD7` tinyint(1) NOT NULL,
  `pemasukanD8` tinyint(1) NOT NULL,
  `pemasukanD9` tinyint(1) NOT NULL,
  `pemasukanD10` tinyint(1) NOT NULL,
  `tep` tinyint(1) NOT NULL,
  `spmk` tinyint(1) NOT NULL,
  `pembahasanK` tinyint(1) NOT NULL,
  `penandatangananK` tinyint(1) NOT NULL,
  `efektifK` tinyint(1) NOT NULL,
  `note` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`pro_code`, `pro_name`, `pro_date`, `clientID`, `promosi`, `opsreq`, `design`, `presentasi`, `sourcing_harga`, `penyiapanDL`, `pengumumanL`, `pendaftaranL`, `prakualifikasi1`, `prakualifikasi2`, `prakualifikasi3`, `prakualifikasi4`, `pengambilanDL`, `aanwizjing`, `pemasukanD1`, `pemasukanD2`, `pemasukanD3`, `pemasukanD4`, `pemasukanD5`, `pemasukanD6`, `pemasukanD7`, `pemasukanD8`, `pemasukanD9`, `pemasukanD10`, `tep`, `spmk`, `pembahasanK`, `penandatangananK`, `efektifK`, `note`) VALUES
('a', 'b', '2018-07-25', 'kai', 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'aaa'),
('p1', 'project 1', '2018-07-24', 'kai', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'no capt');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(20) NOT NULL,
  `password` varchar(32) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `authentication` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `name`, `email`, `authentication`) VALUES
('magrid', '202CB962AC59075B964B07152D234B70', 'Magrid Prisca Juwita', 'magridprisca@gmail.com', 0),
('wul', '202CB962AC59075B964B07152D234B70', 'wulan', 'wulan@mail.com', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `check_process`
--
ALTER TABLE `check_process`
  ADD KEY `fk_usename` (`username`),
  ADD KEY `fk_process` (`process_code`),
  ADD KEY `fk_project` (`pro_code`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`client_code`);

--
-- Indexes for table `process`
--
ALTER TABLE `process`
  ADD PRIMARY KEY (`process_code`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`pro_code`),
  ADD KEY `fk_client` (`clientID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `check_process`
--
ALTER TABLE `check_process`
  ADD CONSTRAINT `fk_process` FOREIGN KEY (`process_code`) REFERENCES `process` (`process_code`),
  ADD CONSTRAINT `fk_project` FOREIGN KEY (`pro_code`) REFERENCES `project` (`pro_code`),
  ADD CONSTRAINT `fk_username` FOREIGN KEY (`username`) REFERENCES `user` (`username`);

--
-- Constraints for table `project`
--
ALTER TABLE `project`
  ADD CONSTRAINT `fk_client` FOREIGN KEY (`clientID`) REFERENCES `client` (`client_code`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
