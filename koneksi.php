<?php
//deklarasi variabel
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "db_team1_perpustakaan";

$connection = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if (!$connection) {
    die("Koneksi Gagal: " . mysqli_connect_error());
}