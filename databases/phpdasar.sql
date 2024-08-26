-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 26, 2024 at 04:31 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpdasar`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `Id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nim` varchar(9) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `angkatan` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`Id`, `nama`, `nim`, `jurusan`, `angkatan`) VALUES
(1, 'Benony Gabriel', '105222002', 'Ilmu Komputer', 2022),
(2, 'Tony Stark', '105222001', 'Elektro', 2020),
(3, 'Albert Einstein', '105222003', 'Ilmu Fisika', 2019),
(4, 'Thomas Alfa Edison', '105222004', 'Ilmu Fisika', 2019),
(5, 'Kartini', '105222005', 'Elektro', 2023),
(6, 'Kristina Martha Tiahahu', '105222002', 'Ilmu Komputer', 2022),
(7, 'Marthen Indey', '105222007', 'Akuntansi', 2020),
(8, 'Imam Bonjol', '105222008', 'Akuntansi', 2021),
(9, 'Pangeran Antasari', '105222009', 'Ilmu Komputer', 2021),
(10, 'Jhon Bakker', '105222010', 'Ilmu Komputer', 2022);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
