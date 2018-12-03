-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2018 at 02:14 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `poliklinik`
--

-- --------------------------------------------------------

--
-- Table structure for table `daftarpoli`
--

CREATE TABLE `daftarpoli` (
  `id` int(6) UNSIGNED NOT NULL,
  `Pasien` varchar(50) NOT NULL,
  `Poliklinik` varchar(50) NOT NULL,
  `Dokter` varchar(50) NOT NULL,
  `Pesan` text,
  `detailKeluhan` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daftarpoli`
--

INSERT INTO `daftarpoli` (`id`, `Pasien`, `Poliklinik`, `Dokter`, `Pesan`, `detailKeluhan`) VALUES
(1, 'Ghalistan', 'asd', 'asd', 'asd', ''),
(2, 'Ghalistan', '', '', '', ''),
(3, 'Ghalistan', '', '', '', ''),
(4, 'Ghalistan', 'asd', 'asd', 'asd', ''),
(5, 'Ghalistan', 'asd', 'asd', 'asd', '');

-- --------------------------------------------------------

--
-- Table structure for table `data_dokter`
--

CREATE TABLE `data_dokter` (
  `id` int(6) UNSIGNED NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `Poliklinik` varchar(50) NOT NULL,
  `Jam_Buka` varchar(50) NOT NULL,
  `Jam_Tutup` varchar(50) NOT NULL,
  `Kontak` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_dokter`
--

INSERT INTO `data_dokter` (`id`, `Nama`, `Poliklinik`, `Jam_Buka`, `Jam_Tutup`, `Kontak`) VALUES
(1, 'Dahlan Darmaji', 'Poli Anak', '08:00', '21:00', '08134678598'),
(2, 'Asep Kasupala', 'Poli Gigi', '08:00', '18:00', '0822567908'),
(5, 'Nanda Nirmala', 'Dokter Umum', '10:00', '18:00', '0812345678'),
(6, 'Wisma An-Nafi', 'Poli mata', '09:00', '21:00', '08134678578');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('Ghalistan', 'asd');

-- --------------------------------------------------------

--
-- Table structure for table `user_data`
--

CREATE TABLE `user_data` (
  `username` varchar(50) NOT NULL,
  `nama_depan` varchar(50) DEFAULT NULL,
  `nama_belakang` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_data`
--

INSERT INTO `user_data` (`username`, `nama_depan`, `nama_belakang`, `email`, `tgl_lahir`, `password`) VALUES
('Ghalistan', 'Gagah', 'Ghalistan', 'gghalistan@gmail.com', '1998-09-12', 'asd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daftarpoli`
--
ALTER TABLE `daftarpoli`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Pasien` (`Pasien`);

--
-- Indexes for table `data_dokter`
--
ALTER TABLE `data_dokter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD KEY `username` (`username`);

--
-- Indexes for table `user_data`
--
ALTER TABLE `user_data`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daftarpoli`
--
ALTER TABLE `daftarpoli`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `data_dokter`
--
ALTER TABLE `data_dokter`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `daftarpoli`
--
ALTER TABLE `daftarpoli`
  ADD CONSTRAINT `daftarpoli_ibfk_1` FOREIGN KEY (`Pasien`) REFERENCES `user_data` (`username`);

--
-- Constraints for table `login`
--
ALTER TABLE `login`
  ADD CONSTRAINT `login_ibfk_1` FOREIGN KEY (`username`) REFERENCES `user_data` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
