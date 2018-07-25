-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Jul 2018 pada 08.56
-- Versi server: 10.1.33-MariaDB
-- Versi PHP: 7.2.6

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
-- Struktur dari tabel `check_process`
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
-- Struktur dari tabel `client`
--

CREATE TABLE `client` (
  `client_code` varchar(20) NOT NULL,
  `client_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `client`
--

INSERT INTO `client` (`client_code`, `client_name`) VALUES
('W123', 'wulan'),
('W1234', 'mag');

-- --------------------------------------------------------

--
-- Struktur dari tabel `process`
--

CREATE TABLE `process` (
  `process_code` varchar(10) NOT NULL,
  `process_type` varchar(20) NOT NULL,
  `process_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `process`
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
-- Struktur dari tabel `project`
--

CREATE TABLE `project` (
  `pro_code` varchar(10) NOT NULL,
  `pro_name` varchar(30) NOT NULL,
  `pro_date` date NOT NULL,
  `clientID` varchar(10) NOT NULL,
  `note` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `project`
--

INSERT INTO `project` (`pro_code`, `pro_name`, `pro_date`, `clientID`, `note`) VALUES
('D0012', 'IT Project', '2018-07-24', 'W123', 'hu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `username` varchar(20) NOT NULL,
  `password` varchar(32) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `authentication` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`username`, `password`, `name`, `email`, `authentication`) VALUES
('wulan', '202CB962AC59075B964B07152D234B70', 'Ariani dwi wulandari', 'ariani15@gmail.com', 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `check_process`
--
ALTER TABLE `check_process`
  ADD KEY `fk_usename` (`username`),
  ADD KEY `fk_process` (`process_code`);

--
-- Indeks untuk tabel `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`client_code`);

--
-- Indeks untuk tabel `process`
--
ALTER TABLE `process`
  ADD PRIMARY KEY (`process_code`);

--
-- Indeks untuk tabel `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`pro_code`),
  ADD KEY `fk_client` (`clientID`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `check_process`
--
ALTER TABLE `check_process`
  ADD CONSTRAINT `fk_process` FOREIGN KEY (`process_code`) REFERENCES `process` (`process_code`),
  ADD CONSTRAINT `fk_usename` FOREIGN KEY (`username`) REFERENCES `user` (`username`);

--
-- Ketidakleluasaan untuk tabel `project`
--
ALTER TABLE `project`
  ADD CONSTRAINT `fk_client` FOREIGN KEY (`clientID`) REFERENCES `client` (`client_code`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
