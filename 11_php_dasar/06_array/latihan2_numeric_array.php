<?php 

$mahasiswa = [
  ["Budi Darmawan", 13608051, "Aeronotika & Astronotika", "suntree99@ymail.com"],
  ["Darmawan Budi", 16908219, "FTMD", "suntree99@gmail.com"],
  [12345678, "Doni Alamsyah", "ITB", "suntree99@yahoo.com"]
];

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Numeric Array</title>
  </head>
  <body>
    
    <h1>Daftar Mahasiswa</h1>
    
    <?php foreach ( $mahasiswa as $mhs ) : ?>
    <ul>
      <li>Nama : <?= $mhs[0]; ?></li>
      <li>NIM : <?= $mhs[1]; ?></li>
      <li>Jususan : <?= $mhs[2]; ?></li>
      <li>Email : <?= $mhs[3]; ?></li>
    </ul>
    <?php endforeach; ?>
    
  </body>
</html>

<!--
pada data mahasiswa terakhir,
posisi nama dan nim tertukar,
namun php tidak menganggap ini salah karena array-nya bersifat numerik,
sehingga kita butuh array assosiatif.
-->
