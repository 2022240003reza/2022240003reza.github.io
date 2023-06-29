-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Jun 2023 pada 21.09
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data_wiraswasta`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `wiraswasta`
--

CREATE TABLE `wiraswasta` (
  `id` int(11) NOT NULL,
  `nama` varchar(64) NOT NULL,
  `alamat_usaha` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(16) NOT NULL,
  `nama_usaha` varchar(16) NOT NULL,
  `bidang_usaha` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `wiraswasta`
--

INSERT INTO `wiraswasta` (`id`, `nama`, `alamat_usaha`, `jenis_kelamin`, `nama_usaha`, `bidang_usaha`) VALUES
(1, 'div', 'Tambun Utara', 'perempuan', 'aniscoutmedia', 'jasa');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `wiraswasta`
--
ALTER TABLE `wiraswasta`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `wiraswasta`
--
ALTER TABLE `wiraswasta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
