<?php 

// settingan koneksi ke database
$connectDB = mysqli_connect("localhost", "root", "", "phpdasar");

// function query - mempersingkat perintah query
function query($query) {
  global $connectDB;
  $result = mysqli_query($connectDB, $query);
  $rows = [];
  while ( $row = mysqli_fetch_assoc($result) ) {
    $rows[] = $row;
  }
  return $rows;
}

// function tambah
function tambah($data) {
  global $connectDB;
  $nama = htmlspecialchars($data["nama"]);
  $nik = htmlspecialchars($data["nik"]);
  $usia = htmlspecialchars($data["usia"]);
  $email = htmlspecialchars($data["email"]);
  $gambar = htmlspecialchars($data["gambar"]);

  $query = "INSERT INTO Karyawan VALUES
            ('', '$nama', '$nik', '$usia', '$email', '$gambar')";

  mysqli_query($connectDB, $query);

  return mysqli_affected_rows($connectDB);
}

// function hapus
function hapus($id) {
  global $connectDB;

  mysqli_query($connectDB, "DELETE FROM karyawan WHERE id = $id");

  return mysqli_affected_rows($connectDB);
}

// function ubah
function ubah($data) {
  global $connectDB;
  $id = $data["id"];
  $nama = htmlspecialchars($data["nama"]);
  $nik = htmlspecialchars($data["nik"]);
  $usia = htmlspecialchars($data["usia"]);
  $email = htmlspecialchars($data["email"]);
  $gambar = htmlspecialchars($data["gambar"]);

  // query update data
  $query = "UPDATE Karyawan SET
            nama = '$nama',
            nik = '$nik',
            usia = '$usia',
            email = '$email',
            gambar = '$gambar'
            WHERE
            id = $id
           ";

  mysqli_query($connectDB, $query);

  return mysqli_affected_rows($connectDB);
}

// function cari
function cari($keyword) { // parameter $keyword disisi oleh $_POST["keyword"] dari form search
  $query = "SELECT * FROM karyawan WHERE
            nama LIKE '%$keyword%' OR
            nik LIKE '%$keyword%' OR
            usia LIKE '%$keyword%' OR
            email LIKE '%$keyword%'
           ";

  return query($query);
}

// LIKE digunakan agar pencarian dilakukan dengan kata yang mengandung keyword
// jika menggunakan sama dengan (=) maka keyword harus sama PERSIS dengan data yang dicari
// % berfungsi agar karakter apapun sebelum/setelah keyword tidak berpengaruh
// tambahkan kutip ('') karena variabel harus berupa string

?>