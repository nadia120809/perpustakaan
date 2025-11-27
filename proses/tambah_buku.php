<?php
include __DIR__ . '/../koneksi.php';
$judul = mysqli_real_escape_string($connection, $_POST['judul']);
$pengarang = mysqli_real_escape_string($connection, $_POST['pengarang']);
$penerbit = mysqli_real_escape_string($connection, $_POST['penerbit']);
$stok = (int) $_POST['stok'];

mysqli_query($connection, "INSERT INTO tbl_buku (judul, pengarang, penerbit, stok) VALUES ('$judul','$pengarang','$penerbit','$stok')");
header('Location: ../buku/buku_index.php');

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if ($connection->query($query)) {
    //redirect ke halaman index.php 
    header("location: buku_index.php");
} else {    
    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";
}

?>