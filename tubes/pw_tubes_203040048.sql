-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Bulan Mei 2021 pada 05.50
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
(1, 'CL CORNWALL', 'DANIEL WELLINGTON', 'RP. 2.250.000', 'BLACK', 20, '1.jpg'),
(2, 'ICONIC LINK 32 S', 'DANIEL WELLINGTON', 'Rp. 3.050.000', 'SILVER', 12, '2.jpg'),
(3, 'GBD 800 2DR', 'CASIO', 'RP.1.799.000', 'BLUE', 16, '3.jpg'),
(4, 'CASIO AW 80D', 'CASIO', 'Rp. 729.000', 'GREY', 14, '4.jpg'),
(5, 'GBA 800 1ADR', 'CASIO', 'Rp. 2.379.000', 'BLACK', 5, '5.jpg'),
(6, 'CASIO A700W', 'CASIO', 'Rp. 690.000', 'GOLD', 10, '6.jpg'),
(7, 'CASIO W 740', 'CASIO', 'Rp. 779.000', 'BLACK', 31, '7.jpg'),
(8, 'CASIO HDC 700', 'CASIO', 'Rp. 899.000', 'ARMY', 10, '8.jpg'),
(9, 'LA 20WH 8ADF', 'CASIO', 'Rp. 359.000', 'DARK GREY', 12, '9.jpg'),
(10, 'CASIO W 735H', 'CASIO', 'Rp. 769.000', 'LIGHT GREY', 2, '10.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(12, 'ica', '$2y$10$A9or5JDF.lxQ1PJzZD7NEuf5s0r4J4va5EPr7n0jkIhAZ8vVGf6C6'),
(13, 'nisaa', '$2y$10$Iyb8ZKm3nC/aorfOk3cuQuZArMPrTiy8bmW/Q8z0lIjjejJVlZyeS'),
(14, 'nis', '$2y$10$1DRa/jixK95vhVjN9EaX1Oi0S5sxPOImWJH3aYGj1Jsnz/yY0lV9G');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `jam`
--
ALTER TABLE `jam`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `jam`
--
ALTER TABLE `jam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
