-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Mar 2022 pada 14.33
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `minumansegar`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `gajikaryawan`
--

CREATE TABLE `gajikaryawan` (
  `Nik` varchar(50) NOT NULL,
  `GajiDiterima` varchar(50) DEFAULT NULL,
  `Golongan` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `gajikaryawan`
--

INSERT INTO `gajikaryawan` (`Nik`, `GajiDiterima`, `Golongan`) VALUES
('1001', '1505000', '2'),
('1002', '1328000', '1'),
('1003', '2340000', '3'),
('1004', '3850000', '4'),
('1005', '1328000', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `golongan`
--

CREATE TABLE `golongan` (
  `Golongan_ID` int(50) NOT NULL,
  `Tunjangan` int(15) NOT NULL,
  `Gapok` int(50) NOT NULL,
  `Potongan` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `golongan`
--

INSERT INTO `golongan` (`Golongan_ID`, `Tunjangan`, `Gapok`, `Potongan`) VALUES
(1, 3000, 1500000, 175000),
(2, 5000, 1700000, 200000),
(3, 75000, 2500000, 235000),
(4, 100000, 4000000, 250000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `karyawan`
--

CREATE TABLE `karyawan` (
  `Nik` varchar(15) NOT NULL,
  `Nama` varchar(50) DEFAULT NULL,
  `JenisKelamin` varchar(15) DEFAULT NULL,
  `Golongan` varchar(50) DEFAULT NULL,
  `Gapok` int(20) DEFAULT NULL,
  `tunjangan` int(50) DEFAULT NULL,
  `potongan` int(30) DEFAULT NULL,
  `total` int(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `karyawan`
--

INSERT INTO `karyawan` (`Nik`, `Nama`, `JenisKelamin`, `Golongan`, `Gapok`, `tunjangan`, `potongan`, `total`) VALUES
('1001', 'Haruman', 'Laki-Laki', '2', 1700000, 5000, 200000, 1505000),
('1002', 'Maria ', 'Perempuan', '1', 1500000, 3000, 175000, 1328000),
('1003', 'Rose', 'Laki-Laki', '3', 2500000, 75000, 235000, 2340000),
('1004', 'Junaedi', 'Laki-Laki', '4', 4000000, 100000, 250000, 3850000),
('1005', 'Aerin', 'Perempuan', '1', 1300000, 3000, 175000, 1328000);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `gajikaryawan`
--
ALTER TABLE `gajikaryawan`
  ADD PRIMARY KEY (`Nik`);

--
-- Indeks untuk tabel `golongan`
--
ALTER TABLE `golongan`
  ADD PRIMARY KEY (`Golongan_ID`);

--
-- Indeks untuk tabel `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`Nik`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `golongan`
--
ALTER TABLE `golongan`
  MODIFY `Golongan_ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
