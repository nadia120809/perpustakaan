<?php
include __DIR__ . '/../koneksi.php';
$nisn = mysqli_real_escape_string($connection, $_POST['nisn']);
$nama = mysqli_real_escape_string($connection, $_POST['nama']);
$kelas = mysqli_real_escape_string($connection, $_POST['kelas']);
$jurusan = mysqli_real_escape_string($connection, $_POST['jurusan']);


mysqli_query($connection, "INSERT INTO tbl_anggota (nisn, nama, kelas, jurusan) VALUES ('$nisn','$nama','$kelas','$jurusan')");
header('Location: ../anggota/anggota_index.php');


//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if ($connection->query($query)) {
    //redirect ke halaman index.php 
    header("location: /Pemrograman%20Web/perpustakaan/anggota/anggota_index.php");
} else {    
    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";
}


?>