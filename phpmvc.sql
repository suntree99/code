-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Okt 2020 pada 11.12
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
-- Database: `phpmvc`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `karyawan`
--

CREATE TABLE `karyawan` (
  `id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `nik` char(9) NOT NULL,
  `usia` varchar(100) NOT NULL,
  `jenis` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `karyawan`
--

INSERT INTO `karyawan` (`id`, `nama`, `nik`, `usia`, `jenis`, `email`, `gambar`) VALUES
(1, 'Andi Kacamata', '202003051', '34', 'Laki-laki', 'andi_kacamata@ymail.com', 'avatar1.png'),
(2, 'Bembi Bewok', '202003052', '30', 'Laki-laki', 'bembi_bewok@ymail.com', 'avatar2.png'),
(3, 'Chandra Uban', '202003053', '50', 'Laki-laki', 'chandra_uban@ymail.com', 'avatar3.png'),
(4, 'Dita Bule', '202003054', '31', 'Perempuan', 'dita_bule@ymail.com', 'avatar4.png'),
(5, 'Elin Tomboy', '202003055', '32', 'Perempuan', 'elin_tomboy@ymail.com', 'avatar5.png'),
(6, 'Fani Sipit', '202003056', '33', 'Perempuan', 'fani_sipit@ymail.com', 'avatar6.png'),
(7, 'Gugun Kribo', '202003057', '35', 'Laki-laki', 'gugun_kribo@ymail.com', 'avatar7.png'),
(8, 'Hana Kuncir', '202003058', '27', 'Perempuan', 'hana_kuncir@ymail.com', 'avatar8.png'),
(9, 'Indra Cepak', '202003059', '26', 'Laki-laki', 'indra_cepak@ymail.com', 'avatar9.png'),
(28, 'Dodol Garut', '123456789', '20', 'Laki-laki', 'dodol.garut@gmail.com', 'avatar1.png'),
(44, 'Dodi', '123456789', '30', 'Laki-laki', 'dodi@ymail.com', 'avatar11.png'),
(51, 'Erika', '987654321', '25', 'Perempuan', 'erika@ymail.com', 'avatar12.png');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
