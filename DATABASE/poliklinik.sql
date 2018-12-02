-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2018 at 04:11 PM
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
(1, 'Ghalistan', 'asd', 'asd', 'asd', '');

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
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
