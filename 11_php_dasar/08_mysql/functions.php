<?php 

// settingan koneksi ke database | mysqli_connect("hostname", "username", "password", "database")
$connectDB = mysqli_connect("localhost", "root", "", "phpdasar");

// menghentikan pembacaan code jika koneksi gagal
if (!$connectDB) {
  exit;
}

// function query - mempersingkat perintah query
function query($query) {
  // mengambil variabel koneksi dari global
  global $connectDB;
  // (query) mengambil data tabel dari database dan menampungnya di variabel $result
  $result = mysqli_query($connectDB, $query);
  // membuat array kosong untuk menyimpan isi tabel
  $rows = [];
  // mengambil data dalam tabel dan menyimpan ke dalam array satu per satu
  while ( $adaData = mysqli_fetch_assoc($result) ) {
    $rows[] = $adaData;
  }
  return $rows;
}

?>