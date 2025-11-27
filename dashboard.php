<?php include "koneksi.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard - Perpustakaan</title>
    <link rel="stylesheet" href="dashboard.css">
</head>

<body>

<div class="dashboard-container">

    <div class="header-box">
        <img src="asets/download (1).jpg" class="logo">
        <h3>APLIKASI PERPUSTAKAAN SEKOLAH</h3>
        <h4>SMK AK NUSA BANGSA</h4>
    </div>

    <div class="menu-grid">

        <a class="menu-card" href="buku/buku_index.php">
            <h2>Buku</h2>
            <p>Kelola data buku</p>
        </a>

        <a class="menu-card" href="anggota/anggota_index.php">
            <h2>Anggota</h2>
            <p>Kelola data anggota</p>
        </a>

        <a class="menu-card" href="peminjaman/peminjaman_index.php">
            <h2>Peminjaman</h2>
            <p>Proses peminjaman buku</p>
        </a>

        <a class="menu-card" href="laporan.php">
            <h2>Laporan</h2>
            <p>Data laporan peminjaman</p>
        </a>

    </div>

</div>

</body>
</html>
