<?php
include __DIR__ . '/../koneksi.php';
?>
    <link rel="stylesheet" href="../style.css">

    <header>DATA ANGGOTA</header>   
        <nav>
            <a href="../dashboard.php">Dashboard</a>
            <a href="../buku/buku_index.php">Buku</a>
            <a href="anggota_index.php">Anggota</a>
            <a href="../peminjaman/peminjaman_index.php">Peminjaman</a>
            <a href="../laporan.php">Laporan</a>
        </nav>
        <div class="container">
            <h2>Data Anggota</h2>
                <a class="btn" href="tambah-anggota.php">+ Tambah Anggota</a><br><br>
            <table>
                <tr>
                    <th>No.</th>
                    <th>NISN</th>
                    <th>Nama</th>
                    <th>Kelas</th>
                    <th>Jurusan</th>
                    <th>Aksi</th>
                </tr>
<?php
$no = 1;
$data = mysqli_query($connection, "SELECT * FROM tbl_anggota ORDER BY id_anggota DESC");
while($a = mysqli_fetch_assoc($data)):
?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $a['nisn'] ?></td>
                    <td><?= $a['nama'] ?></td>
                    <td><?= $a['kelas'] ?></td>
                    <td><?= $a['jurusan'] ?></td>
                    <td>
                         <a href="edit-anggota.php?id=<?= $a['id_anggota'] ?>">Edit</a> |
                         <a href="anggota-hapus.php?id=<?= $a['id_anggota'] ?>" onclick="return confirm('Hapus anggota ini?')">Hapus</a>
                    </td>
                </tr>
<?php endwhile; ?>
            </table>
        </div>