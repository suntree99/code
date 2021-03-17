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
function ubah($data) { // parameter $data disisi oleh $_POST dari form
  global $connectDB;
  $id = $data["id"];
  $nama = htmlspecialchars($data["nama"]);
  $nik = htmlspecialchars($data["nik"]);
  $usia = htmlspecialchars($data["usia"]);
  $email = htmlspecialchars($data["email"]);
  $gambar = htmlspecialchars($data["gambar"]);

  // query update data, tambahkan '' pada setiap variabel karen type-nya string
  // jangan lupa tambahkan kekhususan (WHERE)
  $query = "UPDATE Karyawan SET
            nama = '$nama',
            nik = '$nik',
            usia = '$usia',
            email = '$email',
            gambar = '$gambar'
            WHERE
            id = $id
           ";

  // mengeksekusi query update
  mysqli_query($connectDB, $query);

  return mysqli_affected_rows($connectDB);
}

?>
