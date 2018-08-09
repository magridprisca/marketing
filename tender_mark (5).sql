-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 09, 2018 at 06:20 AM
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
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `client_code` int(20) NOT NULL,
  `client_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`client_code`, `client_name`) VALUES
(1, 'PT Kereta Api Indonesia'),
(2, 'TNI AL');

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
  `id_project` int(11) NOT NULL,
  `pro_code` varchar(10) NOT NULL,
  `pro_name` varchar(30) NOT NULL,
  `pro_date` date NOT NULL,
  `clientID` int(10) NOT NULL,
  `promosi` tinyint(1) NOT NULL,
  `tgl_promosi` date NOT NULL,
  `note1` text NOT NULL,
  `opsreq` tinyint(1) NOT NULL,
  `tgl_opsreq` date NOT NULL,
  `note2` text NOT NULL,
  `design` tinyint(1) NOT NULL,
  `tgl_design` date NOT NULL,
  `note3` text NOT NULL,
  `presentasi` tinyint(1) NOT NULL,
  `tgl_presentasi` date NOT NULL,
  `note4` text NOT NULL,
  `sourcing_harga` tinyint(1) NOT NULL,
  `tgl_sourcing_harga` date NOT NULL,
  `note5` text NOT NULL,
  `penyiapanDL` tinyint(1) NOT NULL,
  `tgl_penyiapanDL` date NOT NULL,
  `note6` text NOT NULL,
  `pengumumanL` tinyint(1) NOT NULL,
  `tgl_pengumumanL` date NOT NULL,
  `note7` text NOT NULL,
  `pendaftaranL` tinyint(1) NOT NULL,
  `tgl_pendaftaranL` date NOT NULL,
  `note8` text NOT NULL,
  `prakualifikasi1` tinyint(1) NOT NULL,
  `tgl_prakualifikasi1` date NOT NULL,
  `note9` text NOT NULL,
  `prakualifikasi2` tinyint(1) NOT NULL,
  `tgl_prakualifikasi2` date NOT NULL,
  `note10` text NOT NULL,
  `prakualifikasi3` tinyint(1) NOT NULL,
  `tgl_prakualifikasi3` date NOT NULL,
  `note11` text NOT NULL,
  `prakualifikasi4` tinyint(1) NOT NULL,
  `tgl_prakualifikasi4` date NOT NULL,
  `note12` text NOT NULL,
  `pengambilanDL` tinyint(1) NOT NULL,
  `tgl_pengambilanDL` date NOT NULL,
  `note13` text NOT NULL,
  `aanwizjing` tinyint(1) NOT NULL,
  `tgl_aanwizjing` date NOT NULL,
  `note14` text NOT NULL,
  `pemasukanD1` tinyint(1) NOT NULL,
  `tgl_pemasukanD1` date NOT NULL,
  `note15` text NOT NULL,
  `pemasukanD2` tinyint(1) NOT NULL,
  `tgl_pemasukanD2` date NOT NULL,
  `note16` text NOT NULL,
  `pemasukanD3` tinyint(1) NOT NULL,
  `tgl_pemasukanD3` date NOT NULL,
  `note17` text NOT NULL,
  `pemasukanD4` tinyint(1) NOT NULL,
  `tgl_pemasukanD4` date NOT NULL,
  `note18` text NOT NULL,
  `pemasukanD5` tinyint(1) NOT NULL,
  `tgl_pemasukanD5` date NOT NULL,
  `note19` text NOT NULL,
  `pemasukanD6` tinyint(1) NOT NULL,
  `tgl_pemasukanD6` date NOT NULL,
  `note20` text NOT NULL,
  `pemasukanD7` tinyint(1) NOT NULL,
  `tgl_pemasukanD7` date NOT NULL,
  `note21` text NOT NULL,
  `pemasukanD8` tinyint(1) NOT NULL,
  `tgl_pemasukanD8` date NOT NULL,
  `note22` text NOT NULL,
  `pemasukanD9` tinyint(1) NOT NULL,
  `tgl_pemasukanD9` date NOT NULL,
  `note23` text NOT NULL,
  `pemasukanD10` tinyint(1) NOT NULL,
  `tgl_pemasukanD10` date NOT NULL,
  `note24` text NOT NULL,
  `tep` tinyint(1) NOT NULL,
  `tgl_tep` date NOT NULL,
  `note25` text NOT NULL,
  `spmk` tinyint(1) NOT NULL,
  `tgl_spmk` date NOT NULL,
  `note26` text NOT NULL,
  `pembahasanK` tinyint(1) NOT NULL,
  `tgl_pembahasanK` date NOT NULL,
  `note27` text NOT NULL,
  `penandatangananK` tinyint(1) NOT NULL,
  `tgl_penandatangananK` date NOT NULL,
  `note28` text NOT NULL,
  `efektifK` tinyint(1) NOT NULL,
  `tgl_efektifK` date NOT NULL,
  `note29` text NOT NULL,
  `note` text NOT NULL,
  `done` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id_project`, `pro_code`, `pro_name`, `pro_date`, `clientID`, `promosi`, `tgl_promosi`, `note1`, `opsreq`, `tgl_opsreq`, `note2`, `design`, `tgl_design`, `note3`, `presentasi`, `tgl_presentasi`, `note4`, `sourcing_harga`, `tgl_sourcing_harga`, `note5`, `penyiapanDL`, `tgl_penyiapanDL`, `note6`, `pengumumanL`, `tgl_pengumumanL`, `note7`, `pendaftaranL`, `tgl_pendaftaranL`, `note8`, `prakualifikasi1`, `tgl_prakualifikasi1`, `note9`, `prakualifikasi2`, `tgl_prakualifikasi2`, `note10`, `prakualifikasi3`, `tgl_prakualifikasi3`, `note11`, `prakualifikasi4`, `tgl_prakualifikasi4`, `note12`, `pengambilanDL`, `tgl_pengambilanDL`, `note13`, `aanwizjing`, `tgl_aanwizjing`, `note14`, `pemasukanD1`, `tgl_pemasukanD1`, `note15`, `pemasukanD2`, `tgl_pemasukanD2`, `note16`, `pemasukanD3`, `tgl_pemasukanD3`, `note17`, `pemasukanD4`, `tgl_pemasukanD4`, `note18`, `pemasukanD5`, `tgl_pemasukanD5`, `note19`, `pemasukanD6`, `tgl_pemasukanD6`, `note20`, `pemasukanD7`, `tgl_pemasukanD7`, `note21`, `pemasukanD8`, `tgl_pemasukanD8`, `note22`, `pemasukanD9`, `tgl_pemasukanD9`, `note23`, `pemasukanD10`, `tgl_pemasukanD10`, `note24`, `tep`, `tgl_tep`, `note25`, `spmk`, `tgl_spmk`, `note26`, `pembahasanK`, `tgl_pembahasanK`, `note27`, `penandatangananK`, `tgl_penandatangananK`, `note28`, `efektifK`, `tgl_efektifK`, `note29`, `note`, `done`) VALUES
(1, 'prooject1', 'KCR5&6', '2018-08-09', 2, 1, '2018-08-09', '', 1, '2018-08-09', '', 0, '2018-08-09', '', 0, '2018-08-09', '', 0, '2018-08-09', '', 0, '2018-08-09', '', 0, '2018-08-09', '', 0, '2018-08-09', '', 0, '2018-08-09', '', 0, '2018-08-09', '', 0, '2018-08-09', '', 0, '2018-08-09', '', 0, '2018-08-09', '', 0, '2018-08-09', '', 0, '2018-08-09', '', 0, '2018-08-09', '', 0, '2018-08-09', '', 0, '2018-08-09', '', 0, '2018-08-09', '', 0, '2018-08-09', '', 0, '2018-08-09', '', 0, '2018-08-09', '', 0, '2018-08-09', '', 0, '2018-08-09', '', 0, '2018-08-09', '', 0, '2018-08-09', '', 0, '2018-08-09', '', 0, '2018-08-09', '', 0, '2018-08-09', '', 'no notes', 0),
(2, 'prooject2', 'name of project 2', '2018-08-09', 1, 0, '0000-00-00', '', 0, '0000-00-00', '', 0, '0000-00-00', '', 0, '0000-00-00', '', 0, '0000-00-00', '', 0, '0000-00-00', '', 0, '0000-00-00', '', 0, '0000-00-00', '', 0, '0000-00-00', '', 0, '0000-00-00', '', 0, '0000-00-00', '', 0, '0000-00-00', '', 0, '0000-00-00', '', 0, '0000-00-00', '', 0, '0000-00-00', '', 0, '0000-00-00', '', 0, '0000-00-00', '', 0, '0000-00-00', '', 0, '0000-00-00', '', 0, '0000-00-00', '', 0, '0000-00-00', '', 0, '0000-00-00', '', 0, '0000-00-00', '', 0, '0000-00-00', '', 0, '0000-00-00', '', 0, '0000-00-00', '', 0, '0000-00-00', '', 0, '0000-00-00', '', 0, '0000-00-00', '', '', 0);

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
('admin', '21232f297a57a5a743894a0e4a801fc3', 'administrator', 'admin@pal.co', 0),
('magrid', '202CB962AC59075B964B07152D234B70', 'Magrid Prisca Juwita', 'magridprisca@gmail.com', 0);

--
-- Indexes for dumped tables
--

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
  ADD PRIMARY KEY (`id_project`),
  ADD KEY `fk_client` (`clientID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `client_code` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `id_project` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `project`
--
ALTER TABLE `project`
  ADD CONSTRAINT `fk_client` FOREIGN KEY (`clientID`) REFERENCES `client` (`client_code`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
