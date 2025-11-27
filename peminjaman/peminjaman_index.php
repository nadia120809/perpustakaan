<?php
include __DIR__ . '/../koneksi.php';
?>
    <link rel="stylesheet" href="../style.css">
        <header>PEMINJAMAN BUKU</header>
        <nav>
            <a href="../dashboard.php">Dashboard</a>
            <a href="../buku/buku_index.php">Buku</a>
            <a href="../anggota/anggota_index.php">Anggota</a>
            <a href="peminjaman_index.php">Peminjaman</a>
            <a href="../laporan.php">Laporan</a>
        </nav>
        <div class="container">
            <h2>Data Peminjaman</h2>
            <a class="btn" href="tambah-peminjaman.php">+ Tambah Peminjaman</a><br><br>
        <table>
            <tr>
                <th>No.</th>
                <th>Anggota</th>
                <th>Buku</th>
                <th>Tgl Pinjam</th>
                <th>Tgl Kembali</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
<?php
$no = 1;
$q = mysqli_query($connection,"SELECT p.*, a.nama, b.judul FROM tbl_peminjaman p JOIN tbl_anggota a ON p.id_anggota=a.id_anggota JOIN tbl_buku b ON p.id_buku=b.id_buku ORDER BY id_pinjam DESC");
while($p=mysqli_fetch_assoc($q)):
?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $p['nama'] ?></td>
                <td><?= $p['judul'] ?></td>
                <td><?= $p['tgl_pinjam'] ?></td>
                <td><?= $p['tgl_kembali'] ?></td>
                <td><?= $p['status'] ?></td>
                <td>
                     <?php if($p['status']=='Dipinjam'): ?>
                     <a href="../proses/proses_kembali.php?id=<?= $p['id_pinjam'] ?>" 
   onclick="return confirm('Konfirmasi pengembalian?')">
   Kembalikan
</a>

                     <?php else: ?>
                     -
                     <?php endif; ?>
                </td>
            </tr>
<?php endwhile; ?>
        </table>
        </div>

        