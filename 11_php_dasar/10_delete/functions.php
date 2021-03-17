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

  // mengeksekusi query delete data, jangan lupa tambahkan kekhususan (WHERE)
  mysqli_query($connectDB, "DELETE FROM karyawan WHERE id = $id");

  return mysqli_affected_rows($connectDB);
}

?>
