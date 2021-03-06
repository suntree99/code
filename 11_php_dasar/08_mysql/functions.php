<?php 

// koneksi ke database | mysqli_connect("host", "username", "password", "nama_database")
$connect = mysqli_connect('localhost', 'root', '', 'phpdasar');

// function query - mempersingkat perintah query
function query($query) {
  // mengambil variabel koneksi dari global
  global $connectDB;
  // mengambil (query) data tabel
  $result = mysqli_query($connectDB, $query);
  // membuat array untuk menyimpan isi tabel
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