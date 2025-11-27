-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 27, 2025 at 10:52 AM
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
-- Database: `db_sekolah`
--
CREATE DATABASE IF NOT EXISTS `db_sekolah` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `db_sekolah`;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_siswa`
--

CREATE TABLE `tbl_siswa` (
  `id_siswa` int NOT NULL,
  `nisn` varchar(50) NOT NULL,
  `nama_lengkap` varchar(200) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_siswa`
--

INSERT INTO `tbl_siswa` (`id_siswa`, `nisn`, `nama_lengkap`, `alamat`) VALUES
(3, '120809', 'Nadia Cahya Agustine', 'Taman Cimanggu jln lantana ujung'),
(4, '08022009', 'Insari', 'Taman Tirta Cimanggu'),
(5, '08102008', 'Aurelia Rifkiana Wibowo ', 'Bumi'),
(6, '23102008', 'Carissa Citra rahmadi', 'Taman Tirta Cimanggu'),
(7, '15102009', 'Amanda Aurora Oktawan', 'Negara Bogor'),
(8, '12345678', 'Aliziyya Kautsara', 'kampung sumur wangi'),
(9, '140520008', 'Siti Aulia Kuswandi', 'BMU');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_siswa`
--
ALTER TABLE `tbl_siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_siswa`
--
ALTER TABLE `tbl_siswa`
  MODIFY `id_siswa` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- Database: `db_team1_perpustakaan`
--
CREATE DATABASE IF NOT EXISTS `db_team1_perpustakaan` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `db_team1_perpustakaan`;

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
(17, 120208, 'Faris', 'XII', 'ANALIS KIMIA');

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
(19, 'laskar pelangi', 'aknb', 'SMK NUBAS', 12),
(20, 'pemrograman web', 'aknb', 'nubas', 10),
(21, 'laut bercerita', 'leila s chudori', 'gatau', 1000);

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
(10, 17, 20, '2025-11-27', '2025-11-27', 'Dikembalikan');

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
  MODIFY `id_anggota` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbl_buku`
--
ALTER TABLE `tbl_buku`
  MODIFY `id_buku` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tbl_peminjaman`
--
ALTER TABLE `tbl_peminjaman`
  MODIFY `id_pinjam` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
