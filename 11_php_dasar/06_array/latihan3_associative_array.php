<?php 

$mahasiswa = [
  [
   "nama" => "Andi Kacamata",
   "nik" => 202003051,
   "usia" => 34,
   "email" => "andi_kacamata@ymail.com",
   "gambar" => "avatar1.png"
  ],
  [
   "nama" => "Bambang Brewok",
   "nik" => 202003052,
   "usia" => 30,
   "email" => "bambang_brewok@ymail.com",
   "gambar" => "avatar2.png"
  ],
  [
   "nama" => "Chandra Uban",
   "nik" => 202003053,
   "usia" => 50,
   "email" => "chandra_uban@ymail.com",
   "gambar" => "avatar3.png"
  ],
  [
   "nama" => "Dita Bule",
   "nik" => 202003054,
   "usia" => 31,
   "email" => "dita_bule@ymail.com",
   "gambar" => "avatar4.png"
  ],
  [
   "nama" => "Elin Tomboy",
   "nik" => 202003055,
   "usia" => 32,
   "email" => "elin_tomboy@ymail.com",
   "gambar" => "avatar5.png"
  ],
  [
   "nama" => "Fani Sipit",
   "nik" => 202003056,
   "usia" => 33,
   "email" => "fani_sipit@ymail.com",
   "gambar" => "avatar6.png"
  ],
  [
   "nama" => "Gugun Kribo",
   "nik" => 202003057,
   "usia" => 35,
   "email" => "gugun_kribo@ymail.com",
   "gambar" => "avatar7.png"
  ],
  [
   "nama" => "Hana Kuncir",
   "nik" => 202003058,
   "usia" => 27,
   "email" => "hana_kuncir@ymail.com",
   "gambar" => "avatar8.png"
  ],
  [
   "nik" => 202003059,
   "nama" => "Indra Cepak",
   "usia" => 26,
   "email" => "indra_cepak@ymail.com",
   "gambar" => "avatar9.png"
  ],
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Associative Array</title>
</head>
<body>
  
  <h1>Data Karyawan</h1>
  
  <?php foreach( $mahasiswa as $mhs ) : ?>
  <ul>
    <li><img src="img/<?= $mhs["gambar"] ?>"></li>
    <li>Nama : <?= $mhs["nama"]; ?></li>
    <li>NIK : <?= $mhs["nik"]; ?></li>
    <li>Usia : <?= $mhs["usia"]; ?></li>
    <li>Email : <?= $mhs["email"]; ?></li>
  </ul>
  <?php endforeach; ?>
</body>
</html>

<!--
Associative Array
Definisinya sama seperti numeric array, namun
key-nya adalah string yang kita buat sendiri.
Sehingga walaupun posisinya data inputnya tertukar,
data yang ditampilkan akan tetap sesuai dengan key-nya.
(contoh pada data terakhir, nik ditulis terlebih dahulu)
-->

