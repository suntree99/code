<?php

// Function
// - Built-In Function (PHP memiliki banyak Built-In Function)
// - User-Defined Function

// http://php.net/manual/en/funcref.php

// Built-In Function

// DATE / TIME

// time()

echo time(); // UNIX Timestamp / EPOCH time (jumlah detik yang telah berlalu sejak 1 Januari 1970)

  echo "<br>";

// date() - untuk menampilkan tanggal dengan format tertentu (butuh minimal 1 parameter) 

echo date("l, d F Y");

  echo "<br>";

echo date("l", time() - 60 * 60 * 24 * 100); // seratus hari kebelakang dari hari ini

  echo "<br>";

// mktime(jam,menit,detik,bulan,tanggal,tahun) - membuat sendiri detik waktu yang diinginkan

echo mktime(0, 0, 0, 10, 7, 1989);

  echo "<br>";

echo date("l", mktime(0, 0, 0, 10, 7, 1989));

  echo "<br>";

// strtotime("tanggal") - menjadi jumlah detik yang telah berlalu

echo strtotime("07 Oct 1989");

  echo "<br>";

echo date("l", strtotime("07 Oct 1989"));

  echo "<hr>";

// STRING
// strlen() - string length (menghitung panjang string)
// strcmp() - string compare (membandingkan dua buah string)
// explode() - memecah string menjadi array
// htmlspecialchars() - karakter spesial untuk keamanan

// UTILITY
// var_dump() - mencetak isi variabel, arrat, object
// isset() - mengecek apakah sebuah variabel sudah pernah dibuat atau belum
// empty() - apakah sebuah variabel ada isinya atau tidak
// die() - menghentikan program (sintaks di bawahnya tidak akan diproses)
// sleep() - menghentikan program sementara 

// User-Defined Function

function salam($waktu = "Datang", $nama = "Admin")
{
  return "Selamat $waktu, $nama!";
}

?>

<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <title>Function</title>
  </head>

  <body>

    <h1><?= salam("Pagi", "Budi"); ?></h1>
    
  </body>

</html>