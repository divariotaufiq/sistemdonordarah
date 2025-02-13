-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Feb 2025 pada 06.09
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `donor_darah`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendonor`
--

CREATE TABLE `pendonor` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `tempat_tanggal_lahir` date NOT NULL,
  `golongan_darah` enum('A','B','AB','O') NOT NULL,
  `nomor_hp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pendonor`
--

INSERT INTO `pendonor` (`id`, `nama`, `alamat`, `tempat_tanggal_lahir`, `golongan_darah`, `nomor_hp`) VALUES
(10, 'Abdurrahman Hamid', 'Surabaya, JAwa Teimur', '2000-02-11', 'B', '081224841281'),
(11, 'Adrian Fahmi ', 'Kendal', '0000-00-00', 'AB', '081242217421'),
(13, 'Taufiq', 'Kendal', '2001-02-16', 'B', '08212414214'),
(14, 'Abdurrahman Hamid', 'Surabaya, Jawa Teimur', '0000-00-00', 'B', '081224841281'),
(15, 'Divario Taufiq Adiyatma', 'semarang', '2001-02-16', 'A', '0812233'),
(16, 'Dipaaaaa', 'Kendal, Jawa Tengah', '2001-02-16', 'A', '081241221412');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pendonor`
--
ALTER TABLE `pendonor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pendonor`
--
ALTER TABLE `pendonor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
