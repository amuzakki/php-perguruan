-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 31, 2022 at 08:40 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `latihan_perguruan`
--

-- --------------------------------------------------------

--
-- Table structure for table `negara`
--

CREATE TABLE `negara` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `pilihan_1` varchar(255) DEFAULT NULL,
  `waktu` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `negara`
--

INSERT INTO `negara` (`id`, `nama`, `pilihan_1`, `waktu`) VALUES
(1, 'Ahmad', 'keris', '10:25:00'),
(2, 'Abdul', 'tongkat', '10:30:00'),
(3, 'Agus', 'keris', '11:28:00');

-- --------------------------------------------------------

--
-- Table structure for table `negari`
--

CREATE TABLE `negari` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `pilihan_1` varchar(255) DEFAULT NULL,
  `waktu` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `negari`
--

INSERT INTO `negari` (`id`, `nama`, `pilihan_1`, `waktu`) VALUES
(1, 'Budi', 'keris', '10:30:00'),
(2, 'Bondan', 'tongkat', '11:29:00'),
(3, 'Boris', 'tongkat', '11:24:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `negara`
--
ALTER TABLE `negara`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `negari`
--
ALTER TABLE `negari`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `negara`
--
ALTER TABLE `negara`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `negari`
--
ALTER TABLE `negari`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
