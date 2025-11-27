<?php include __DIR__ . '/../koneksi.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head><meta charset="utf-8"><title>Tambah Anggota</title></head>
<link rel="stylesheet" href="../style.css">

<body>


    <form action="../proses/tambah_anggota.php" method="POST">
        <label>NISN:</label><br>
        <input type="text" name="nisn" required><br><br>


        <label>Nama:</label><br>
        <input type="text" name="nama" required><br><br>


        <label>Kelas:</label><br>
            <select name="kelas" required>
                <option value="">Pilih Kelas</option>
                <option value="X">X</option>
                <option value="XI">XI</option>
                <option value="XII">XII</option>
            </select><br><br>


        <label>Jurusan:</label><br>
            <select name="jurusan" required>
                <option value="">Pilih Jurusan</option>
                <option value="Analis Kimia">Analis Kimia</option>
                <option value="Farmasi">Farmasi</option>
                <option value="PPLG">PPLG</option>
            </select><br><br>


<button class="btn" type="submit">SIMPAN</button>
<button class="btn" type="reset">RESET</button>
<button class="btn" type="button" onclick="window.location.href='anggota_index.php'">CANCEL</button>
</form>
</body>
</html>