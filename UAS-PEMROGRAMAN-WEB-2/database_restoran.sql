-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Apr 2021 pada 04.05
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database_restoran`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pilihrestoran`
--

CREATE TABLE `tbl_pilihrestoran` (
  `id` int(11) NOT NULL,
  `pilihRestoran` varchar(100) NOT NULL,
  `pilihMenu` varchar(100) NOT NULL,
  `hargaMenu` int(11) NOT NULL,
  `almt_pemesanan` varchar(100) NOT NULL,
  `nm_lengkap` varchar(100) NOT NULL,
  `no_hp` varchar(100) NOT NULL,
  `almt_email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_pilihrestoran`
--

INSERT INTO `tbl_pilihrestoran` (`id`, `pilihRestoran`, `pilihMenu`, `hargaMenu`, `almt_pemesanan`, `nm_lengkap`, `no_hp`, `almt_email`) VALUES
(15, 'Warteg Kharisma', 'Paket Nasi Tempe Orek', 30000, 'Bintaro', 'Calvin', '0895331925695', 'anre@gmail.com'),
(17, 'Restoran Padang Sederhana', 'Paket Nasi Sate Padang', 40000, 'CIledug', 'Rizal', '08953318485', 'anre@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_pilihrestoran`
--
ALTER TABLE `tbl_pilihrestoran`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_pilihrestoran`
--
ALTER TABLE `tbl_pilihrestoran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
