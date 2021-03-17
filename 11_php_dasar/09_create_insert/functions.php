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
function tambah($data) { // parameter $data disisi oleh $_POST dari form
  global $connectDB;
  $nama = htmlspecialchars($data["nama"]);
  $nik = htmlspecialchars($data["nik"]);
  $usia = htmlspecialchars($data["usia"]);
  $email = htmlspecialchars($data["email"]);
  $gambar = htmlspecialchars($data["gambar"]);
  // htmlspecialchar() berfungsi agar syntax html yang dimasukan user tidak dieksekusi

  // query insert data, kosongkan id karena disi otomatis
  // tambahkan kutip ('') pada setiap variabel karen type-nya string
  $query = "INSERT INTO Karyawan VALUES
            ('', '$nama', '$nik', '$usia', '$email', '$gambar')";
  
  // mengeksekusi query
  mysqli_query($connectDB, $query);

  // mengecek perubahan data
  // jika berhasil bernilai positif (1) jika gagal bernilai negatif (-1)
  return mysqli_affected_rows($connectDB);
}

?>