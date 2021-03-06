<?php 

$karyawan = [
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
   "nama" => "Indra Cepak",
   "nik" => 202003059,
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
    <title>Get - Link</title>
  </head>
  <body>
    
    <h1>Data Karyawan</h1>
    
    <ul>
    <?php foreach( $karyawan as $kry ) : ?>
      <li>
        <a href="latihan2_get_link2.php?
          nama=<?= $kry["nama"]; ?>
          &nik=<?= $kry["nik"]; ?>
          &usia=<?= $kry["usia"]; ?>
          &email=<?= $kry["email"]; ?>
          &gambar=<?= $kry["gambar"]; ?>">
          <?= $kry["nama"]; ?>
        </a>
      </li>
    <?php endforeach; ?>
    </ul>

  </body>
</html>


