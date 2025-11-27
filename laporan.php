<?php 
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Peminjaman</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .print-btn {
            background: maroon;
            color: white;
            padding: 8px 15px;
            border-radius: 5px;
            text-decoration: none;
        }
        .print-btn:hover {
            opacity: .8;
        }

        @media print {
            .no-print {
                display: none;
            }
            header, nav {
                display: none;
            }
        }
    </style>
</head>
<body>

<header>LAPORAN PEMINJAMAN</header>

<nav class="no-print">
    <a href="dashboard.php">Dashboard</a>
    <a href="buku/buku_index.php">Buku</a>
    <a href="anggota/anggota_index.php">Anggota</a>
    <a href="peminjaman/peminjaman_index.php">Peminjaman</a>
    <a href="laporan.php" class="aktif">Laporan</a>
</nav>

<div class="container">
    <h2>Laporan Peminjaman Buku</h2>

    <a href="#" class="print-btn no-print" onclick="window.print()">🖨 Cetak Laporan</a>
    <br><br>

    <table>
        <tr>
            <th>ID Pinjam</th>
            <th>Nama Anggota</th>
            <th>Judul Buku</th>
            <th>Tgl Pinjam</th>
            <th>Tgl Kembali</th>
            <th>Status</th>
        </tr>

        <?php
        $q = mysqli_query($connection,
        "SELECT p.*, a.nama, b.judul 
         FROM tbl_peminjaman p
         JOIN tbl_anggota a ON p.id_anggota = a.id_anggota
         JOIN tbl_buku b ON p.id_buku = b.id_buku
         ORDER BY p.id_pinjam DESC");
        $no = 1;
        while($d = mysqli_fetch_assoc($q)):
        ?>
        <tr>
            <td><?= $no++?></td>
            <td><?= $d['nama'] ?></td>
            <td><?= $d['judul'] ?></td>
            <td><?= $d['tgl_pinjam'] ?></td>
            <td><?= $d['tgl_kembali'] ?></td>
            <td><?= $d['status'] ?></td>
        </tr>
        <?php endwhile; ?>
    </table>

</div>

</body>
</html>
