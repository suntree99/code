<?php 

// menghubungkan code file functions.php ke dalam file ini
require 'functions.php';

// melakukan query data
$karyawan = query("SELECT * FROM karyawan");

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Halaman Admin</title>
  </head>
  <body>
    
    <h1>Daftar Karyawan</h1>
    <!-- menambahkan link 'Tambah Data Karyawan' ke halaman 1_tambah.php -->
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
      
      <!-- inisialisasi index -->
      <?php $i = 1; ?>
      <!-- mengambil setiap baris data sebagai $row dari $karyawan (data tabel dalam bentuk array) -->
      <?php foreach ( $karyawan as $row ) : ?> 

      <tr>
        <td><?= $i; ?></td>
        <td>
          <!-- menambahkan link 'ubah' untuk berpindah ke halaman 3_ubah.php dan mengirimkan data 'id' menggunakan $_GET["id"] -->
          <a href="3_ubah.php?id=<?= $row["id"]; ?>">ubah</a> | 
          <a href="2_hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('Apakah anda yakin data ini ingin DIHAPUS?');">hapus</a>
          <!-- menambahkan link 'hapus' untuk berpindah ke halaman 2_hapus.php dan mengirimkan data 'id' menggunakan $_GET["id"] -->
          <!-- menambahkan attribute onclick dengan function confirm untuk mengonfirmasi sebelum perintah dieksekusi -->
        </td>
        <td><img src="img/<?= $row["gambar"]; ?>" alt="<?= $row["nama"]; ?>" width="50px"></td>
        <td><?= $row["nik"]; ?></td>
        <td><?= $row["nama"]; ?></td>
        <td><?= $row["usia"]; ?></td>
        <td><?= $row["email"]; ?></td>
      </tr>
      
      <!-- increment index -->
      <?php $i++; ?>
      <!-- mengakhiri foreach -->
      <?php endforeach; ?>

    </table>

  </body>
</html>