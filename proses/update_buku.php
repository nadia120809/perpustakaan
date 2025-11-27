<?php
//include koneksi database
include __DIR__ . '/../koneksi.php';
//get data dari form, validate presence
if (!isset($_POST['id_buku'])) {
    echo "ID Buku tidak ditemukan.";
    exit;
}
$id_buku      = mysqli_real_escape_string($connection, $_POST['id_buku']);
$judul        = mysqli_real_escape_string($connection, $_POST['judul']);
$pengarang    = mysqli_real_escape_string($connection, $_POST['pengarang']);
$penerbit     = mysqli_real_escape_string($connection, $_POST['penerbit']);
$stok         = mysqli_real_escape_string($connection, $_POST['stok']);
//query update data ke dalam database berdasarkan ID
$query = "UPDATE tbl_buku SET judul = '$judul', pengarang = '$pengarang', penerbit = '$penerbit', stok = '$stok' WHERE id_buku = '$id_buku'";
//kondisi pengecekan apakah data berhasil diupdate atau tidak
if (mysqli_query($connection, $query)) {
    header("Location: ../buku/buku_index.php");
    exit;
} else {
    echo "Data Gagal Diupdate: " . mysqli_error($connection);
}

