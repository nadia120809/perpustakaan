<?php
include __DIR__ . '/../koneksi.php';
$id = $_GET['id'];
mysqli_query($connection, "DELETE FROM tbl_anggota WHERE id_anggota='$id'");
header('Location: anggota_index.php');
?>