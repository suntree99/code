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

// ----------------------------------------------------------------------------------------------------
// function tambah
function tambah($data) { // parameter $data disisi oleh $_POST dari form
  global $connectDB;
  $nama = htmlspecialchars($data["nama"]);
  $nik = htmlspecialchars($data["nik"]);
  $usia = htmlspecialchars($data["usia"]);
  $email = htmlspecialchars($data["email"]);
  $gambar = htmlspecialchars($data["gambar"]);
  // htmlspecialchar() berfungsi agar syntax html yang diinputkan user kedalam form tidak dieksekusi

  // query insert data, kosongkan id karena disi otomatis ('')
  // tambahkan kutip (') pada setiap variabel karena type-nya string
  $query = "INSERT INTO karyawan VALUES
            ('', '$nama', '$nik', '$usia', '$email', '$gambar')";
  
  // mengeksekusi query
  mysqli_query($connectDB, $query);

  // mengecek perubahan data, jika berhasil bernilai positif (1) jika gagal bernilai negatif (-1)
  return mysqli_affected_rows($connectDB);
}

?>