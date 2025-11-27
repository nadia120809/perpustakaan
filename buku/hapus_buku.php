<?php
include __DIR__ . '/../koneksi.php';
$id = $_GET['id'];
mysqli_query($connection, "DELETE FROM tbl_buku WHERE id_buku=$id");
header('Location: buku_index.php');
?>