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

// pengondisian alert jika tombol submit ditekan
if ( isset($_POST["submit"]) ) {

  // mengecek apakah data berhasil ditambahkan atau tidak
  if ( tambah($_POST) > 0 ) {
    echo "
      <script>
        alert('Data BERHASIL ditambahkan');
        document.location.href = 'index.php';
      </script>";
  } else {
    echo "
      <script>
        alert('Data GAGAL ditambahkan');
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

    <title>Tambah Data Karyawan</title>

  </head>
  <body>

    <!-- Awal Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary print-hilang"> <!-- menambahkan class "print-hilang" untuk style print -->
      <div class="container">
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

    <div class="container">
      <div class="row text-center mb-5 mt-5">
        <div class="col">
          <h1>Tambah Data Karyawan</h1>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-6">
          <!-- menambahkan attribute enctype (encoding type) pada form untuk menangani jenis data yang berbeda (file/gambar) -->
          <form class="m-auto" action="" method="post" enctype="multipart/form-data">
          <!-- input string akan ditangani oleh $_POST, sedangkan input file akan ditangani oleh $_FILES -->
            <div>
              <label class="form-label" for="nik">NIK :</label>
              <input class="form-control mb-3" type="text" name="nik" id="nik" required>
            </div>
            <div>
              <label class="form-label" for="nama">Nama :</label>
              <input class="form-control mb-3" type="text" name="nama" id="nama" required>
            </div>
            <div>
              <label class="form-label" for="usia">Usia :</label>
              <input class="form-control mb-3" type="text" name="usia" id="usia" required>
            </div>
            <div>
              <label class="form-label" for="email">Email :</label>
              <input class="form-control mb-3" type="email" name="email" id="email" required>
            </div>
            <div>
              <label class="form-label" for="gambar">Gambar :</label>
              <input class="form-control mb-3" type="file" name="gambar" id="gambar" required> <!-- mengganti type input gambar menjadi "file" -->
            </div>
            <div>
              <button class="btn btn-primary m-auto mt-3" type="submit" name="submit">Tambah Data!</button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

  </body>
  
</html>