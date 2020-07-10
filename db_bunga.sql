-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Jul 2020 pada 05.52
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.3.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bunga`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `db_bunga`
--

CREATE TABLE `db_bunga` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jns_bunga` varchar(50) NOT NULL,
  `asl_bunga` varchar(50) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `db_bunga`
--

INSERT INTO `db_bunga` (`id`, `nama`, `jns_bunga`, `asl_bunga`, `gambar`) VALUES
(1, 'bunga anggrek', 'Orchidaceae', 'sirkumpolar', 'angrek.jpg'),
(2, ' Bunga Allamanda', 'cathartica', ' bunga terompet emas atau bunga buttercup', 'manda.jpg'),
(3, 'Bunga Anyelir', 'teluki,', 'Mediterania', 'Anyelir.jpg'),
(4, 'bunga anggrek', 'Orchidaceae', 'sirkumpolar', 'angrek.jpg'),
(5, ' Bunga Allamanda', 'cathartica', ' bunga terompet emas atau bunga buttercup', 'manda.jpg'),
(6, 'Bunga Anyelir', 'teluki,', 'Mediterania', 'Anyelir.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `db_bunga`
--
ALTER TABLE `db_bunga`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `db_bunga`
--
ALTER TABLE `db_bunga`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
