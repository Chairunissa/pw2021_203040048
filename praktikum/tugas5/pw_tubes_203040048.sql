-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Apr 2021 pada 15.15
-- Versi server: 10.4.16-MariaDB
-- Versi PHP: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw_tubes_203040048`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `jam`
--

CREATE TABLE `jam` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `merk` varchar(50) NOT NULL,
  `harga` text NOT NULL,
  `color` varchar(20) NOT NULL,
  `quality` int(5) NOT NULL,
  `gambar` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jam`
--

INSERT INTO `jam` (`id`, `nama`, `merk`, `harga`, `color`, `quality`, `gambar`) VALUES
(1, 'CLASSIC PETITE CORNWALL', 'DANIEL WELLINGTON', 'RP. 2.250.000', 'BLACK', 9, '1.jpeg'),
(2, 'ICONIC LINK 32 S', 'DANIEL WELLINGTON', 'Rp. 3.050.000', 'SILVER', 2, '2.jpeg'),
(3, 'GBD 800 2DR', 'CASIO', 'RP.1.799.000', 'BLUE', 1, '3.jpeg'),
(4, 'CASIO AW 80D 1AVDF', 'CASIO', 'Rp. 729.000', 'GREY', 4, '4.jpeg'),
(5, 'GBA 800 1ADR', 'CASIO', 'Rp. 2.379.000', 'BLACK', 5, '5.jpeg'),
(6, 'CASIO A700W 1ADF', 'CASIO', 'Rp. 690.000', 'GOLD', 10, '6.jpeg'),
(7, 'CASIO W 740 1VS', 'CASIO', 'Rp. 779.000', 'BLACK', 3, '7.jpeg'),
(8, 'CASIO HDC 700 3A2VDF', 'CASIO', 'Rp. 899.000', 'ARMY', 2, '8.jpeg'),
(9, 'LA 20WH 8ADF', 'CASIO', 'Rp. 359.000', 'DARK GREY', 12, '9.jpeg'),
(10, 'CASIO W 735H 8A2VDF', 'CASIO', 'Rp. 769.000', 'LIGHT GREY', 2, '10.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `jam`
--
ALTER TABLE `jam`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `jam`
--
ALTER TABLE `jam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
