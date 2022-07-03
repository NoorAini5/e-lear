-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Jun 2022 pada 14.14
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kalkulator`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `calculator`
--

CREATE TABLE `calculator` (
  `bil1` float NOT NULL,
  `bil2` float NOT NULL,
  `operasi` varchar(255) NOT NULL,
  `hasil` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `calculator`
--

INSERT INTO `calculator` (`bil1`, `bil2`, `operasi`, `hasil`) VALUES
(1, 2, 'kali', 2),
(1, 1, 'bagi', 1),
(1, 1, 'pangkat', 1),
(1, 4, 'tambah', 5),
(4, 5, 'kurang', -1),
(5, 6, 'modulo', 5),
(1, 2, 'tambah', 3),
(3, 4, 'kurang', -1),
(2, 2, 'kali', 4),
(2, 2, 'bagi', 1),
(2, 2, 'pangkat', 4),
(2, 2, 'modulo', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
