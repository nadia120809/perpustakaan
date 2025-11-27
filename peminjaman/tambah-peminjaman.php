<?php include __DIR__ . '/../koneksi.php'; ?>
<link rel="stylesheet" href="../style.css">
    <header>Tambah Peminjaman</header>
        <div class="container">
            <form action="../proses/tambah_peminjaman.php" method="POST">
                <label>Anggota:</label><br>
                    <select name="id_anggota" required>
                        <option value="">--Pilih Anggota--</option>
<?php
    $ag = mysqli_query($connection, "SELECT * FROM tbl_anggota ORDER BY nama");
    while($a=mysqli_fetch_assoc($ag)):
?>
                        <option value="<?= $a['id_anggota'] ?>"><?= $a['nama'] ?> - <?= $a['kelas'] ?></option>
<?php endwhile; ?>
                    </select><br><br>
                <label>Buku:</label><br>
                    <select name="id_buku" required>
                        <option value="">--Pilih Buku--</option>
<?php
    $bk = mysqli_query($connection, "SELECT * FROM tbl_buku ORDER BY judul");

    while($b=mysqli_fetch_assoc($bk)):
?>
                        <option value="<?= $b['id_buku'] ?>"><?= $b['judul'] ?></option>
<?php endwhile; ?>
                    </select><br><br>
                <button type="submit" class="btn simpan">SIMPAN</button>
                <button type="button" class="btn cancel" onclick="history.back()">Cancel</button>
            </form>
        </div>


        