-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 27, 2025 at 12:15 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_team1_perpustakaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_anggota`
--

CREATE TABLE `tbl_anggota` (
  `id_anggota` int NOT NULL,
  `nisn` int NOT NULL,
  `nama` varchar(75) NOT NULL,
  `kelas` enum('X','XI','XII','XIII') NOT NULL,
  `jurusan` enum('ANALIS KIMIA','FARMASI','PPLG') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_anggota`
--

INSERT INTO `tbl_anggota` (`id_anggota`, `nisn`, `nama`, `kelas`, `jurusan`) VALUES
(9, 120809, 'Nadia Cahya Agustine', 'XI', 'PPLG'),
(15, 80209, 'Insari', 'XI', 'PPLG'),
(16, 123, 'Amanda', 'X', 'ANALIS KIMIA'),
(18, 235427, 'Khoirunnisa Maulidia Ferliana', 'XI', 'PPLG'),
(19, 98765, 'Devan', 'X', 'ANALIS KIMIA');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_buku`
--

CREATE TABLE `tbl_buku` (
  `id_buku` int NOT NULL,
  `judul` varchar(100) NOT NULL,
  `pengarang` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `penerbit` varchar(75) NOT NULL,
  `stok` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_buku`
--

INSERT INTO `tbl_buku` (`id_buku`, `judul`, `pengarang`, `penerbit`, `stok`) VALUES
(19, 'Laskar Pelangi', 'Andrea Hirata', 'Bentang Pustaka', 12),
(21, 'Laut Bercerita', 'Leila s Chudori', 'Gramedia', 1),
(22, 'Malioboro At Midnight', 'Skysphire', 'Bukune', 9),
(23, 'Seporsi Mie Ayam Sebelum Mati', 'Brian Khrisna', 'Grasindo', 4),
(24, '3726 MDPL', 'Nurwina Sari', 'Romancius', 7);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_peminjaman`
--

CREATE TABLE `tbl_peminjaman` (
  `id_pinjam` int NOT NULL,
  `id_anggota` int NOT NULL,
  `id_buku` int NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_kembali` date DEFAULT NULL,
  `status` enum('Dipinjam','Dikembalikan') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_peminjaman`
--

INSERT INTO `tbl_peminjaman` (`id_pinjam`, `id_anggota`, `id_buku`, `tgl_pinjam`, `tgl_kembali`, `status`) VALUES
(1, 9, 15, '2025-11-26', '2025-11-26', 'Dikembalikan'),
(2, 9, 15, '2025-11-26', '2025-11-26', 'Dikembalikan'),
(3, 9, 15, '2025-11-26', '2025-11-26', 'Dikembalikan'),
(4, 9, 18, '2025-11-26', '2025-11-26', 'Dikembalikan'),
(5, 9, 17, '2025-11-26', '2025-11-26', 'Dikembalikan'),
(6, 9, 17, '2025-11-26', '2025-11-26', 'Dikembalikan'),
(7, 9, 19, '2025-11-26', '2025-11-26', 'Dikembalikan'),
(8, 15, 20, '2025-11-26', '2025-11-26', 'Dikembalikan'),
(9, 16, 21, '2025-11-26', '2025-11-26', 'Dikembalikan'),
(10, 17, 20, '2025-11-27', '2025-11-27', 'Dikembalikan'),
(11, 18, 24, '2025-11-27', NULL, 'Dipinjam'),
(12, 19, 23, '2025-11-27', NULL, 'Dipinjam'),
(13, 15, 22, '2025-11-27', NULL, 'Dipinjam');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_anggota`
--
ALTER TABLE `tbl_anggota`
  ADD PRIMARY KEY (`id_anggota`);

--
-- Indexes for table `tbl_buku`
--
ALTER TABLE `tbl_buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indexes for table `tbl_peminjaman`
--
ALTER TABLE `tbl_peminjaman`
  ADD PRIMARY KEY (`id_pinjam`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_anggota`
--
ALTER TABLE `tbl_anggota`
  MODIFY `id_anggota` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tbl_buku`
--
ALTER TABLE `tbl_buku`
  MODIFY `id_buku` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tbl_peminjaman`
--
ALTER TABLE `tbl_peminjaman`
  MODIFY `id_pinjam` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
