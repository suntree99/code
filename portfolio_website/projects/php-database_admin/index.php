<?php

// -------------------------
// menjalankan session
session_start();

// pengondisian jika belum berhasil login, misalnya mencoba akses melalui url
if (!isset($_SESSION["login"])) {
  header("Location: 5_login.php"); // mengembalikan ke halaman login
  exit;
}
// -------------------------

// menghubungkan code file functions.php ke dalam file ini
require 'functions.php';

// melakukan query data
$karyawan = query("SELECT * FROM karyawan");

// pengondisian jika tombol cari ditekan
if (isset($_POST["cari"])) {
  // eksekusi function cari
  $karyawan = cari($_POST["keyword"]);
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

  <!-- My CSS -->
  <link href="css/index.css" rel="stylesheet">

  <title>Halaman Admin</title>

  <script src="js/jquery-3.4.1.min.js"></script> <!-- penempatan JQuery harus lebih awal dari script yang lain -->
  <script src="js/script.js"></script>

</head>

<body>

  <!-- Awal Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary d-print-none">
    <!-- menambahkan class "d-print-none" untuk style print -->
    <div class="container">
      <a class="navbar-brand" href="#">Database Karyawan</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="1_tambah.php">Tambah Data Karyawan</a>
          </li>
          <li>
            <div class="spinner-grow m-auto loader" role="status">
              <span class="visually-hidden m-auto">Loading...</span>
            </div>
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

  <!-- menambahkan link 'logout' untuk menghapus session -->
  <!-- <a href="6_logout.php" class="logout">Logout</a> menambahkan class "d-print-none" untuk style print -->
  <div class="container">
    <div class="row text-center mb-3 mt-5">
      <div class="col">
        <h1>Daftar Karyawan</h1>
      </div>
    </div>
    <div class="row justify-content-center mb-3">
      <div class="col-md-6">
        <form class="cari d-print-none" method="post">
          <!-- menambahkan class "d-print-none" untuk style print -->
          <input class="form-control" type="search" aria-label="Search" name="keyword" size="30px" autofocus placeholder="masukkan keyword pencarian..." autocomplete="off" id="keyword">
          <button class="btn btn-outline-success" type="submit" name="cari" id="tombolCari">Search</button>
        </form>

      </div>
    </div>
  </div>

  <!-- menambahkan link 'Tambah Data Karyawan' ke halaman 1_tambah.php -->
  <!-- menambahkan form untuk search -->


  <!-- <form action="" method="post" class="cari"> menambahkan class "cari" untuk style print -->
  <!-- ------------------------- -->
  <!-- ajax - memodifikasi form search dengan menambahkan attribute id pada input dan button untuk triger ajax -->
  <!-- <input type="text" name="keyword" size="40px" autofocus placeholder="masukkan keyword pencarian..." autocomplete="off" id="keyword"> -->
  <!-- autofocus berfungsi agar element tersebut langsung aktif saat halaman dibuka -->
  <!-- placeholder berfungsi untuk menampilkan kata-kata contoh/perintah -->
  <!-- autocomplete berfungsi untuk memberikan saran kata yang pernah dimasukkan -->
  <!-- <button type="submit" name="cari" id="tombolCari">Cari!</button> -->
  <!-- <img src="img/loader.gif" class="loader"> hiasan loading -->
  <!-- <br><br> -->
  <!-- </form> -->

  <!-- ---------------------------------------------------------------------------------------------------- -->
  <div id="container" class="container mb-5">
    <!-- menambahkan container untuk batasan ajax -->
    <table cellpadding="10" cellspacing="0" class="m-auto">

      <tr class="text-center">
        <th>No.</th>
        <th class="d-print-none">Aksi</th> <!-- menambahkan class "d-print-none" untuk style print -->
        <th>Gambar</th>
        <th>NIK</th>
        <th>Nama</th>
        <th>Usia</th>
        <th>Email</th>
      </tr>

      <!-- inisialisasi index -->
      <?php $i = 1; ?>
      <!-- mengambil setiap baris data sebagai $row dari $karyawan (data tabel dalam bentuk array) -->
      <?php foreach ($karyawan as $row) : ?>

        <tr>
          <td class="text-center"><?= $i; ?></td>
          <td class="text-center d-print-none">
            <!-- menambahkan class "d-print-none" untuk style print -->
            <!-- menambahkan link 'ubah' untuk berpindah ke halaman 3_ubah.php dan mengirimkan data 'id' menggunakan $_GET["id"] -->
            <a href="3_ubah.php?id=<?= $row["id"]; ?>" class="btn btn-success mb-1">ubah</a>
            <a href="2_hapus.php?id=<?= $row["id"]; ?>" class="btn btn-danger mb-1" onclick="return confirm('Apakah anda yakin data ini ingin DIHAPUS?');">hapus</a>
            <!-- menambahkan link 'hapus' untuk berpindah ke halaman 2_hapus.php dan mengirimkan data 'id' menggunakan $_GET["id"] -->
            <!-- menambahkan attribute onclick dengan function confirm untuk mengonfirmasi sebelum perintah dieksekusi -->
          </td>
          <td class="text-center"><img src="img/<?= $row["gambar"]; ?>" alt="<?= $row["nama"]; ?>" width="50px"></td>
          <td><?= $row["nik"]; ?></td>
          <td><?= $row["nama"]; ?></td>
          <td><?= $row["usia"]; ?></td>
          <td><?= $row["email"]; ?></td>
        </tr>

        <!-- increment index -->
        <?php $i++; ?>
        <!-- mengakhiri foreach -->
      <?php endforeach; ?>

    </table>
  </div> <!-- tag penutup container untuk batasan ajax -->
  <!-- ---------------------------------------------------------------------------------------------------- -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

</body>

</html>