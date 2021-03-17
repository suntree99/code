<?php 

session_start();

if ( !isset($_SESSION["login"]) ) {
  header("Location: 5_login.php");
  exit;
}

// menghubungkan dengan perintah dari file functions.php
require 'functions.php';

$karyawan = query("SELECT * FROM karyawan");

// menjalankan function cari jika tombol cari diklik
if ( isset($_POST["cari"]) ) {
  $karyawan = cari($_POST["keyword"]);
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Halaman Admin</title>
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/script.js"></script>
    <style>
      .loader {
        width: 100px;
        position: absolute;
        top: 120px;
        left: 300px;
        z-index: -1;
        display: none;
      }

      /* menambahkan style untuk print */
      @media print {
        .logout,
        .tambah,
        .cari,
        .aksi {
          display: none;
        }
      }
    </style>
  </head>
  <body>
    <!--  -->
    <a href="6_logout.php" class="logout">Logout</a> <!-- menambahkan class -->

    <h1>Daftar Karyawan</h1>
    <a href="1_tambah.php" class="tambah">Tambah Data Karyawan</a> <!-- menambahkan class -->
    <br><br>
    
    <form action="" method="post" class="cari"> <!-- menambahkan class -->
      <input type="text" name="keyword" size="40px" autofocus placeholder="masukkan keyword pencarian..." autocomplete="off" id="keyword">
      <button type="submit" name="cari" id="tombolCari">Cari!</button>

      <img src="img/loader.gif" class="loader">
      
      <br><br>
    </form>

    <div id="container">
    <table border="1" cellpadding="10" cellspacing="0">

      <tr>
        <th>No.</th>
        <th class="aksi">Aksi</th> <!-- menambahkan class -->
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
        <td class="aksi"> <!-- menambahkan class -->
          <a href="3_ubah.php?id=<?= $row["id"]; ?>">ubah</a> | 
          <a href="2_hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('Yakin mau DIHAPUS?');">hapus</a>
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
    </div>
    
  </body>
</html>
