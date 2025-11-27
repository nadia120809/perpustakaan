<?php include __DIR__ . '/../koneksi.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="../style.css">
<title>Tambah Buku</title>
</head>
<body>
<form action="../proses/tambah_buku.php" method="POST">
<label for="judul">Judul:</label><br>
<input type="text" id="judul" name="judul" required><br><br>


<label for="penerbit">Penerbit:</label><br>
<input type="text" id="penerbit" name="penerbit" required><br><br>


<label for="pengarang">Pengarang:</label><br>
<input type="text" id="pengarang" name="pengarang" required><br><br>


<label for="stok">Stok:</label><br>
<input type="number" id="stok" name="stok" required><br><br>


<button class="btn" type="submit" class="btn simpan">SIMPAN</button>
<button class="btn" type="reset" class="btn reset">RESET</button>
<button class="btn" type="button" class="btn cancel" onclick="window.location.href='buku_index.php'">CANCEL</button>
</form>
</body>
</html>