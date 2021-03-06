<?php 

// Jika data belum terpenuhi semua, misal dengan dimasukan manual melalui url
if  ( !isset ($_GET["nama"]) ||
      !isset ($_GET["nik"]) ||
      !isset ($_GET["usia"]) ||
      !isset ($_GET["email"]) || 
      !isset ($_GET["gambar"]) ) {
  // lakukan redirect - tendang kembali ke halaman sebelumnya
  header ("Location: latihan1_get_link1.php");
  exit;
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Get - Link</title>
    <style>
      ul { list-style-type: none; }
    </style>
  </head>
  <body>
    
    <h1>Biodata Karyawan : </h1>
    
    <ul>
      <li><img src="img/<?= $_GET["gambar"] ?>"></li>
      <li>Nama : <?= $_GET["nama"]; ?></li>
      <li>NIK : <?= $_GET["nik"]; ?></li>
      <li>Usia : <?= $_GET["usia"]; ?> Tahun</li>
      <li>Email : <?= $_GET["email"]; ?></li>
    </ul>

    <a href="latihan1_get.php">Kembali ke Daftar Karyawan</a>

  </body>
</html>
