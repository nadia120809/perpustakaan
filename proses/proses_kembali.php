<?php
// Menghubungkan ke database
include '../koneksi.php';

// Ambil id peminjaman dari URL
$id_pinjam = $_GET['id'];

// Cek apakah id valid
if (!$id_pinjam) {
    echo "Error: ID peminjaman tidak ditemukan.";
    exit;
}

// Ambil data peminjaman untuk mengetahui id_buku
$query = mysqli_query($connection, "
    SELECT id_buku 
    FROM tbl_peminjaman 
    WHERE id_pinjam = $id_pinjam
");

$data = mysqli_fetch_assoc($query);

// Jika data tidak ditemukan
if (!$data) {
    echo "Error: Data peminjaman tidak ditemukan.";
    exit;
}

$id_buku = $data['id_buku'];
$tgl_kembali = date('Y-m-d');

// 1️ Update status peminjaman + tanggal kembali
mysqli_query($connection, "
    UPDATE tbl_peminjaman 
    SET 
        status = 'Dikembalikan',
        tgl_kembali = '$tgl_kembali'
    WHERE id_pinjam = $id_pinjam
");

// 2️ Menambah stok buku 1
mysqli_query($connection, "
    UPDATE tbl_buku 
    SET stok = stok + 1
    WHERE id_buku = $id_buku
");

// 3️ Redirect kembali ke halaman daftar peminjaman
header("Location: ../peminjaman/peminjaman_index.php");
exit;
?>
