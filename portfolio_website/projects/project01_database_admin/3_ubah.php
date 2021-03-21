<?php 

// -------------------------
// menjalankan session
session_start();

// pengondisian jika belum berhasil login, misalnya mencoba akses melalui url
if ( !isset($_SESSION["login"]) ) {
  header("Location: 5_login.php"); // mengembalikan ke halaman login
  exit;
}
// -------------------------

// menghubungkan code file functions.php ke dalam file ini
require 'functions.php';

// menangkap $_GET dari halaman index.php
$id = $_GET["id"];

// melakukan query data berdasarkan id
$kry = query("SELECT * FROM Karyawan where id = $id")[0];
// hasil query() saja adalah data satu row berupa array numerik [0] 
// sehingga perlu ditambahkan [0] untuk mengakses isi data di dalamnya 

// pengondisian alert jika tombol submit ditekan
if ( isset($_POST["submit"]) ) {

  // mengecek apakah data berhasil diubah atau tidak
  if ( ubah($_POST) > 0 ) {
    echo "
      <script>
        alert('Data BERHASIL diubah');
        document.location.href = 'index.php';
      </script>";
  } else {
    echo "
      <script>
        alert('Data GAGAL diubah');
        document.location.href = 'index.php';
      </script>";
  }
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Ubah Data Karyawan</title>

    <style>.form-ubah { width: 500px; } </style>

  </head>
  <body>

    <!-- Awal Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary print-hilang"> <!-- menambahkan class "print-hilang" untuk style print -->
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Database Karyawan</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Kembali ke Daftar Karyawan</a>
            </li>
          </ul>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" href="6_logout.php">Logout</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Akhir Navbar -->

    <h1 class="text-center mt-5 mb-5">Ubah Data Karyawan</h1>

    <!-- menambahkan attribute enctype (encoding type) pada form untuk menangani jenis data yang berbeda (file/gambar) -->
    <form class="m-auto" action="" method="post" enctype="multipart/form-data">
    <!-- input string akan ditangani oleh $_POST, sedangkan input file akan ditangani oleh $_FILES -->

      <!-- menambahkan element input untuk id dengan type="hidden" agar tidak terlihat oleh user -->
      <input type="hidden" name="id" value="<?= $kry["id"]; ?>">
      <!-- menambahkan element input untuk gambar lama dengan type="hidden" sebagai gambar default jika tidak diganti -->
      <input type="hidden" name="gambarLama" value="<?= $kry["gambar"]; ?>">

      <div class="container">
        <div class="row m-auto form-ubah">
          <div class="col">
            <!-- menambahkan attribute value pada setiap elemen input untuk menampilkan setiap nilai sebelumnya -->
            <div>
              <label class="form-label" for="nik">NIK :</label>
              <input class="form-control mb-3" type="text" name="nik" id="nik" required value="<?= $kry["nik"]; ?>">
            </div>
            <div>
              <label class="form-label" for="nama">Nama :</label>
              <input class="form-control mb-3" type="text" name="nama" id="nama" required value="<?= $kry["nama"]; ?>">
            </div>
            <div>
              <label class="form-label" for="usia">Usia :</label>
              <input class="form-control mb-3" type="text" name="usia" id="usia" required value="<?= $kry["usia"]; ?>">
            </div>
            <div>
              <label class="form-label" for="email">Email :</label>
              <input class="form-control mb-3" type="email" name="email" id="email" required value="<?= $kry["email"]; ?>">
            </div>
            <div>
              <label class="form-label me-5" for="gambar">Gambar :</label>
              <img class="mb-3" src="img/<?= $kry["gambar"]; ?>" width="100"><br> <!-- menambahkan element gambar untuk menampilkan gambarLama -->
              <input class="form-control mb-3" type="file" name="gambar" id="gambar"><br> <!-- mengganti type input gambar menjadi "file" -->
            </div>
            <div>
              <button class="btn btn-primary m-auto mt-3" type="submit" name="submit">Ubah Data!</button>
            </div>
          </div>
        </div>
      </div>
    </form>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

  </body>
</html>