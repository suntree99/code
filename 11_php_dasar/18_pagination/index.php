<?php 

session_start();

if ( !isset($_SESSION["login"]) ) {
  header("Location: 5_login.php");
  exit;
}

// menghubungkan dengan perintah dari file functions.php
require 'functions.php';

// konfigurasi pagination
$jumlahDataPerHalaman = 3;
$jumlahData = count(query("SELECT * FROM karyawan")); // count() untuk menghitung jumlah data dalam array associative
$jumlahHalaman = ceil($jumlahData/$jumlahDataPerHalaman); // ceil() untuk pembulatan keatas
$halamanAktif = ( isset($_GET['halaman']) ) ? $_GET['halaman'] : 1; // operator ternary
$awalData = ( $jumlahDataPerHalaman * $halamanAktif - $jumlahDataPerHalaman); // logika

// query data menggunakan LIMIT untuk membatasi data yang ditampilkan
$karyawan = query("SELECT * FROM karyawan LIMIT $awalData, $jumlahDataPerHalaman");

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

  <!-- Membuat navigasi -->

  <!-- membuat navigasi ke kiri (<<) -->
  <?php if( $halamanAktif > 1 ) : ?>
    <a href="?halaman=<?= $halamanAktif-1; ?>">&laquo;</a> 
  <?php endif; ?>

  <!-- membuat halaman navigasi (1 2 3..) -->
  <?php for ( $i = 1; $i <= $jumlahHalaman; $i++ ) : ?>
    <?php if( $i == $halamanAktif ) : ?>
      <a href="?halaman=<?= $i; ?>" style="font-weight: bold; color: red;"><?= $i ?></a> <!-- menambahkan style untuk halaman aktif -->
    <?php else : ?>
      <a href="?halaman=<?= $i; ?>"><?= $i ?></a>
    <?php endif;  ?>
  <?php endfor; ?>

  <!-- membuat navigasi ke kanan (>>) -->
  <?php if( $halamanAktif < $jumlahHalaman ) : ?>
    <a href="?halaman=<?= $halamanAktif+1; ?>">&raquo;</a>
  <?php endif; ?>

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
