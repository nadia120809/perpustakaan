<?php
include __DIR__ . '/../koneksi.php';

    $id = $_GET['id'];
    $query = "SELECT * FROM tbl_anggota WHERE id_anggota = $id LIMIT 1";
    $result = mysqli_query($connection, $query);
    $row = mysqli_fetch_array($result);
    ?>

 <!doctype html>
 <html lang="en">

 <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <link rel="stylesheet" href="../style.css">
     <title>Edit Anggota</title>
 </head>

 <body>
     <div class="container" style="margin-top: 80px">
         <div class="row">
             <div class="col-md-8 offset-md-2">
                 <div class="card">
                     <form action="/Pemrograman%20Web/perpustakaan/proses/update_anggota.php" method="POST">
                        <input type="hidden" name="id_anggota" value="<?= htmlspecialchars($row['id_anggota']) ?>">
                         <div class="form-group">
                             <label>NISN</label><br>
                             <input type="text" name="nisn" value="<?php echo htmlspecialchars($row['nisn']); ?>" placeholder="Masukan NISN" class="form-control">
                         </div><br><br>
                         <div class="form-group">
                             <label>Nama</label><br>
                             <input type="text" name="nama" value="<?php echo htmlspecialchars($row['nama']); ?>" placeholder="Masukkan Nama Anggota" class="form-control">
                         </div><br><br>
                         <div class="form-group">
                             <label>Kelas</label><br>
                            <select name="kelas" id="kelas">
                                <option value="">Pilih Kelas</option>
                                <option value="X">X</option>
                                <option value="XI">XI</option>
                                <option value="XII">XII</option>
                            </select><br><br>
                         </div>
                         <label>Jurusan</label><br>
                         <select name="jurusan" id="jurusan">
                            <option value="">Pilih Jurusan</option>
                            <option value="Analis Kimia">Analis Kimia</option>
                            <option value="Farmasi">Farmasi</option>
                            <option value="PPLG">PPLG</option>
                         </select>
                 </div>
                         <button type="submit" class="btn btn-success">UPDATE</button>
                         <button type="button" class="btn btn-warning" onclick="window.location.href='anggota_index.php'">Cancel</button>
                     </form>
                 </div>
             </div>
         </div>
     </div>
     </div>
     <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
 </body>

 </html>