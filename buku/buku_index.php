<?php include __DIR__ . '/../koneksi.php'; ?>
<link rel="stylesheet" href="../style.css">
    <header>DATA BUKU</header>
    <nav>
        <a href="../dashboard.php">Dashboard</a>
        <a href="buku_index.php">Buku</a>
        <a href="../anggota/anggota_index.php">Anggota</a>
        <a href="../peminjaman/peminjaman_index.php">Peminjaman</a>
        <a href="../laporan.php">Laporan</a>
    </nav>
    <div class="container">
        <h2>Data Buku</h2>
            <a class="btn" href="tambah-buku.php">+ Tambah Buku</a><br><br>
        <table>
            <tr>
                <th>No.</th>
                <th>Judul</th>
                <th>Penerbit</th>
                <th>Pengarang</th>
                <th>Stok</th>
                <th>Aksi</th>
            </tr>
<?php $no = 1; $data = mysqli_query($connection,"SELECT * FROM tbl_buku"); while($b=mysqli_fetch_assoc($data)): ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $b['judul'] ?></td>
                <td><?= $b['penerbit'] ?></td>
                <td><?= $b['pengarang'] ?></td>
                <td><?= $b['stok'] ?></td>
                <td>
            <a href="edit-buku.php?id=<?= $b['id_buku'] ?>">Edit</a> |
            <a href="hapus_buku.php?id=<?= $b['id_buku'] ?>">Hapus</a>
                </td>
            </tr>
<?php endwhile; ?>
        </table>
    </div>