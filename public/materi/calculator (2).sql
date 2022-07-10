-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2022 at 05:19 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `calculator`
--

-- --------------------------------------------------------

--
-- Table structure for table `calculator`
--

CREATE TABLE `calculator` (
  `id` int(11) NOT NULL,
  `bil1` float NOT NULL,
  `bil2` float NOT NULL,
  `operasi` varchar(255) NOT NULL,
  `hasil` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `calculator`
--

INSERT INTO `calculator` (`id`, `bil1`, `bil2`, `operasi`, `hasil`) VALUES
(1, 12, 2, 'tambah', 14),
(2, 0, 0, '', 0),
(3, 12, 2, 'tambah', 14),
(4, 0, 0, '', 0),
(5, 100, 2, 'modulo', 0),
(6, 45, 45, 'kali', 2025),
(7, 0, 0, '', 0),
(8, 3000, 200, 'tambah', 3200),
(9, 33, 22, '+', 0),
(10, 33, 33, '+', 0),
(11, 33, 22, '+', 0),
(12, 11, 11, '+', 22),
(13, 0, 0, '', 0),
(14, 1, 2, '+', 3),
(15, 33, 1, '*', 33),
(16, 1.2, 2, '*', 2.4),
(17, 22, 2, '/', 11),
(18, 22, 8, '+', 30),
(19, 33, 5, '+', 38),
(20, 45, 3, '%', 0),
(21, 100, 2, '%', 0),
(22, 36, 5, '%', 1),
(23, 88, 10, '%', 8),
(24, 7, 7, '^', 0),
(25, 7, 7, '^', 0),
(26, 7, 7, '^', 0),
(27, 888, 2, '^', 0),
(28, 4, 4, '^', 256),
(29, 2, 2, '^', 4),
(30, 4, 4, '^', 256),
(31, 2, 3, '^', 8),
(32, 89, 7, '*', 623);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `calculator`
--
ALTER TABLE `calculator`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `calculator`
--
ALTER TABLE `calculator`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
