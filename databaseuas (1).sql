-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2020 at 02:26 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `databaseuas`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `perusahaan` varchar(100) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `nama`, `alamat`, `perusahaan`, `tanggal`) VALUES
(1, 'Joko Fadlyanto', 'Karawang', 'PT GS BATTREY', '2020-03-10'),
(2, 'Ratih Purwasih', 'Jakarta', 'PT Setia Abadi', '2020-04-17'),
(3, 'Robitoh Suryaji', 'Karawang', 'PT Mulya Kencana', '2020-03-18'),
(4, 'Dika Ramadan', 'Banyumas', 'PT Mulia Boga Mandiri', '2020-04-22'),
(5, 'Sinta Amalia', 'Bandung', 'CV Cemerlang Sejahtera', '2020-05-29'),
(6, 'Juan Bindana', 'Jakarta', 'PT Aman Sentosa', '2020-06-02'),
(7, 'Pevita Kirana', 'Bandung', 'PT GS BATTREY', '2020-03-18'),
(8, 'Hanindia Puranama', 'Karawang', 'PT Amanah Selalu', '2020-06-03'),
(9, 'Vina Puji Lestari', 'Karawang', 'PT Aman Sentosa', '2020-06-18'),
(10, 'Rudi Abraham', 'Karawang', 'PT Aman Sentosa', '2020-06-18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
