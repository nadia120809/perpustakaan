<?php
include '../koneksi.php';

$id_anggota = $_POST['id_anggota'];
$id_buku = $_POST['id_buku'];
$tgl = date('Y-m-d');

// CEK STOK BUKU
$cek = mysqli_query($connection, "SELECT stok, judul FROM tbl_buku WHERE id_buku = $id_buku");
$data = mysqli_fetch_assoc($cek);

// JIKA STOK HABIS → TAMPIL ALERT
if ($data['stok'] == 0) {
    echo "<script>
            alert('Buku \"{$data['judul']}\" tidak bisa dipinjam karena stok habis!');
            window.location.href='../peminjaman/tambah-peminjaman.php';
          </script>";
    exit;
}

// LANJUTKAN INSERT PEMINJAMAN
mysqli_query($connection, "
INSERT INTO tbl_peminjaman (id_anggota, id_buku, tgl_pinjam, status)
VALUES ('$id_anggota', '$id_buku', '$tgl', 'Dipinjam')
");

// KURANGI STOK
mysqli_query($connection, "
UPDATE tbl_buku SET stok = stok - 1 
WHERE id_buku = $id_buku
");

header("Location: ../peminjaman/peminjaman_index.php");
exit;
?>
