<?php 

// Jika data belum terisi semua dengan dimasukan manual melalui url
if  ( !isset ($_GET["nama"]) ||
      !isset ($_GET["nik"]) ||
      !isset ($_GET["usia"]) ||
      !isset ($_GET["email"]) || 
      !isset ($_GET["gambar"]) ) {
  // redirect - tendang kembali ke halaman sebelumnya
  header ("Location: latihan1_get.php");
  exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Get 2</title>
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
