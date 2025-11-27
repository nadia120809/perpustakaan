<?php
//include koneksi database
include __DIR__ . '/../koneksi.php';
//get data dari form, validate presence
if (!isset($_POST['id_anggota'])) {
    echo "ID anggota tidak ditemukan.";
    exit;
}
$id_anggota     = mysqli_real_escape_string($connection, $_POST['id_anggota']);
$nisn           = mysqli_real_escape_string($connection, $_POST['nisn']);
$nama           = mysqli_real_escape_string($connection, $_POST['nama']);
$kelas          = mysqli_real_escape_string($connection, $_POST['kelas']);
$jurusan        = mysqli_real_escape_string($connection, $_POST['jurusan']);
//query update data ke dalam database berdasarkan ID
$query = "UPDATE tbl_anggota SET nisn = '$nisn', nama = '$nama', kelas = '$kelas', jurusan = '$jurusan' WHERE id_anggota = '$id_anggota'";
//kondisi pengecekan apakah data berhasil diupdate atau tidak
if (mysqli_query($connection, $query)) {
    header("Location: ../anggota/anggota_index.php");
    exit;
} else {
    echo "Data Gagal Diupdate: " . mysqli_error($connection);
}

