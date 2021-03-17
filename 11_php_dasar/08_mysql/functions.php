<?php 

// settingan koneksi ke database | mysqli_connect("nama_server", "username", "password", "nama_database")
$connectDB = mysqli_connect("localhost", "root", "", "phpdasar");

// penghentian pembacaan code jika koneksi gagal
if (!$connectDB) {
  // whatever processing you want to do upon error in connection
  // like log error or send an email to admin
  // I am just printing the error at the moment.
  echo mysqli_connect_errno() . ":" . mysqli_connect_error();
  exit;
}

// function query - mempersingkat perintah query
function query($query) {
  // mengambil variabel koneksi dari global
  global $connectDB;
  // mengambil (query) data tabel
  $result = mysqli_query($connectDB, $query);
  // membuat array kosong untuk menyimpan isi tabel
  $rows = [];
  // mengambil data dalam tabel satu per satu disimpan ke dalam array
  while ( $adaData = mysqli_fetch_assoc($result) ) {
    $rows[] = $adaData;
  }
  return $rows;
}

  // beberapa cara mengambil (fetch) data :
    // mysqli_fetch_row() - mengembalikan array numerik
    // mysqli_fetch_assoc() - mengembalikan array associative
    // mysqli_fetch_array() - mengembalikan array keduanya (numerik & associative) - data dobel
    // mysqli_fetch_object() - mengembalikan object - diambil dengan panah (->)

?>