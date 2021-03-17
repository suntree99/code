<?php 

// menjalankan session
session_start();

// mengembalikan ke halaman login jika belum berhasil login
if ( !isset($_SESSION["login"]) ) {
  header("Location: 5_login.php");
  exit;
}

// menghubungkan code file functions.php ke dalam file ini
require 'functions.php';

$karyawan = query("SELECT * FROM karyawan");

// menjalankan function cari jika tombol cari diklik
if ( isset($_POST["cari"]) ) {
  $karyawan = cari($_POST["keyword"]);
}

// menambahkan link logout untuk menghapus session

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Halaman Admin</title>
  </head>
  <body>
    
    <a href="6_logout.php">Logout</a>

    <h1>Daftar Karyawan</h1>
    <a href="1_tambah.php">Tambah Data Karyawan</a>
    <br><br>

    <form action="" method="post">
      <input type="text" name="keyword" size="40px" autofocus placeholder="masukkan keyword pencarian..." autocomplete="off">
      <button type="submit" name="cari">Cari!</button>
      <br><br>
    </form>

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

  </body>
</html>
