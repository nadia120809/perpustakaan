<?php
include __DIR__ . '/../koneksi.php';

$id = $_GET['id'];
$query = "SELECT * FROM tbl_buku WHERE id_buku = $id LIMIT 1";
$result = mysqli_query($connection, $query);
$row = mysqli_fetch_array($result);
?>
    <!doctype html>
    <html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../style.css">
    <title>Edit Buku</title>
    </head>
        <body>
            <div class="container" style="margin-top: 30px">
                <form action="/Pemrograman%20Web/perpustakaan/proses/update_buku.php" method="POST">
                    <input type="hidden" name="id_buku" value="<?= htmlspecialchars($row['id_buku']) ?>">
                        <label>Judul</label><br>
                    <input type="text" name="judul" value="<?= htmlspecialchars($row['judul']); ?>" placeholder="Masukan Judul"><br><br>
                        <label>Pengarang</label><br>
                    <input type="text" name="pengarang" value="<?= htmlspecialchars($row['pengarang']); ?>" placeholder="Masukkan Nama Pengarang"><br><br>
                        <label>Penerbit</label><br>
                    <input type="text" name="penerbit" value="<?= htmlspecialchars($row['penerbit']) ?>" placeholder="Masukkan penerbit"><br><br>
                        <label>Stok</label><br>
                    <input type="number" name="stok" value="<?= htmlspecialchars($row['stok']) ?>" placeholder="Masukkan stok"><br><br>

                    <button class="btn" type="submit">UPDATE</button>
                    <button class="btn" type="button" onclick="window.location.href='buku_index.php'">Cancel</button>
                </form>
            </div>
        </body>
    </html>