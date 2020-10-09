<?php 

// menghubungkan dengan perintah dari file functions.php
require 'functions.php';

// menambahkan attribute enctype pada form untuk menangani jenis data yang berbeda (file/gambar)
  // input string akan ditangani oleh $_POST
  // input file akan ditangani oleh $_FILES
// mengganti type input gambar menjadi "file"

// mengecek jika tombol submit sudah ditekan
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
  <meta charset="UTF-8">
  <title>Tambah Data Karyawan</title>
</head>
<body>

  <h1>Tambah Data Karyawan</h1>

  <form action="" method="post" enctype="multipart/form-data">
    <ul>
      <li>
        <label for="nik">NIK :</label>
        <input type="text" name="nik" id="nik" required>
      </li>
      <li>
        <label for="nama">Nama :</label>
        <input type="text" name="nama" id="nama">
      </li>
      <li>
        <label for="usia">Usia :</label>
        <input type="text" name="usia" id="usia">
      </li>
      <li>
        <label for="email">Email :</label>
        <input type="text" name="email" id="email">
      </li>
      <li>
        <label for="gambar">Gambar :</label>
        <input type="file" name="gambar" id="gambar">
      </li>
      <li>
        <button type="submit" name="submit">
          Tambah Data!
        </button>
      </li>
    </ul>

  </form>

  <a href="index.php">Kembali ke Halaman Data Karyawan</a>

</body>
</html>
