<?php 

// menghubungkan code file functions.php ke dalam file ini
require 'functions.php';

$karyawan = query("SELECT * FROM karyawan");

// menambahkan link 'Tambah Data Karyawan'
// berpindah ke halaman 1_tambah.php
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Halaman Admin</title>
  </head>
  <body>
    
    <h1>Daftar Karyawan</h1>
    <a href="1_tambah.php">Tambah Data Karyawan</a>
    <br><br>

    <table border="1" cellpadding="10" cellspacing="0">

      <tr>
        <th>No.</th>
        <th>Aksi</th>
        <th>Gambar</th>
        <th>NIK</th>
        <th>Nama</th>
        <th>Usia</th>
        <th>Email</th>
      </tr>
      
      <?php $i = 1;  ?>
      <?php foreach ( $karyawan as $row ) : ?>
      
      <tr>
        <td><?= $i; ?></td>
        <td>
          <a href="">ubah</a> | 
          <a href="">hapus</a>
        </td>
        <td><img src="img/<?= $row["gambar"]; ?>" alt="<?= $row["nama"]; ?>" width="50px"></td>
        <td><?= $row["nik"]; ?></td>
        <td><?= $row["nama"]; ?></td>
        <td><?= $row["usia"]; ?></td>
        <td><?= $row["email"]; ?></td>
      </tr>

      <?php $i++; ?>
      <?php endforeach; ?>

    </table>

  </body>
</html>
