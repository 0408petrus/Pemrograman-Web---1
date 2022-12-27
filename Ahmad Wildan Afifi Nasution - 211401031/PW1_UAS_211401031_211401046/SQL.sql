-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2022 at 02:31 PM
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
-- Database: `uaspw`
--

-- --------------------------------------------------------

--
-- Table structure for table `daftarsiswa`
--

CREATE TABLE `daftarsiswa` (
  `nisn` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `nohp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `daftarsiswa`
--

INSERT INTO `daftarsiswa` (`nisn`, `nama`, `alamat`, `nohp`) VALUES
(214012, 'AREP', 'Isekai(2)', '0812351021'),
(235235, 'Sudirman', 'Jakarta', '0812325234'),
(1241241, 'Sukijan', 'Jakarta', '081223425'),
(2114421, 'Supriman', 'Jakarta', '0812325'),
(21401223, 'maou-sama', 'Isekai', '0812781021'),
(21401244, 'Dhafin', 'Jakarta', '0812137421');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`) VALUES
('admin', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daftarsiswa`
--
ALTER TABLE `daftarsiswa`
  ADD PRIMARY KEY (`nisn`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
