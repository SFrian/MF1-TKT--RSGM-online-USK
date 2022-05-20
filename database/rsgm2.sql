-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2022 at 08:16 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rsgm2`
--

-- --------------------------------------------------------

--
-- Table structure for table `studikasus`
--

CREATE TABLE `studikasus` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `deskripsi` varchar(150) NOT NULL,
  `jadwal` date NOT NULL,
  `keterangan` varchar(200) NOT NULL,
  `gambar` blob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studikasus`
--

INSERT INTO `studikasus` (`id`, `nama`, `judul`, `deskripsi`, `jadwal`, `keterangan`, `gambar`) VALUES
(42, 'Maman', 'fdafao', 'jfaojoi', '2022-05-24', 'fdafa', 0x363238366337643131623266382e6a7067),
(43, 'asda', 'fsaf', 'afsa', '2022-06-03', 'fasfa', 0x363238366337653134323861622e6a7067),
(44, 'asfa', 'afsa', 'fasf', '2022-06-01', 'fasfa', 0x363238366337663732663631372e706e67),
(45, 'fas', 'afsaf', 'qwr', '2022-05-16', 'fwfq', 0x363238366338303435393335392e6a7067),
(46, 'fwqq', 'fqwq', 'fwq', '2022-05-31', 'fwfq', 0x363238366338313631376562362e6a7067),
(48, 'Rayan', 'Gusi Kuat', 'Membersihkan gusi', '2022-05-26', 'Ini hanyalah contoh kasus', 0x363238366665623332613833352e6a7067),
(51, 'Herdi', 'Contoh Kasus 3', 'Ini hanyalah sempel 3', '2022-05-18', 'ini contoh', 0x363238366665656331613262362e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(4, 'mahasiswa', '$2y$10$QWOiqcZarf77I2QfYpOE2efGxgv2NIVYGHtjgxBd4s1Y4eYLrF6bG'),
(7, 'pasien', '$2y$10$0z1dwY3YeYrOA/9lUBAoB.ev43MOWkhKA.ESV04aFaoV1I7RJ.Hme');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `studikasus`
--
ALTER TABLE `studikasus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `studikasus`
--
ALTER TABLE `studikasus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
