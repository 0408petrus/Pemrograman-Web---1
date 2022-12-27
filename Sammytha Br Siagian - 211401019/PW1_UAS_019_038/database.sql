-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2022 at 03:52 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sekolah`
--

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `nomor` int(3) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `nisn` int(11) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `email` varchar(30) NOT NULL,
  `no_telp` varchar(13) NOT NULL,
  `status` enum('BELUM TERVERIFIKASI','TERVERIFIKASI') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pendaftaran`
--

INSERT INTO `pendaftaran` (`nomor`, `nama`, `nisn`, `jenis_kelamin`, `tanggal_lahir`, `alamat`, `email`, `no_telp`, `status`) VALUES
(1, 'Rodiatul', 12346, 'Perempuan', '2030-12-20', 'Medan', 'rodiatul@gmail.com', '081234567890', 'TERVERIFIKASI'),
(6, 'Childe', 18901, 'Laki-laki', '2022-12-23', 'Bandung', 'childe@gmail.com', '081237890456', 'BELUM TERVERIFIKASI'),
(5, 'Kazuha', 23334, 'Laki-laki', '2022-12-23', 'Jakarta', 'kazuha@gmail.com', '0812345677899', 'TERVERIFIKASI'),
(2, 'Sammytha ', 23456, 'Laki-laki', '2022-12-31', 'Kalimantan', 'sam@gmail.com', '08234567899', 'BELUM TERVERIFIKASI');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `nama`) VALUES
('user1', '827ccb0eea8a706c4c34a16891f84e7b', 'Rodiatul'),
('admin1', '827ccb0eea8a706c4c34a16891f84e7b', 'Sammytha');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`nisn`),
  ADD UNIQUE KEY `nomor` (`nomor`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  MODIFY `nomor` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
