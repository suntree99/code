<?php 

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
    <meta charset="UTF-8">
    <title>Tambah Data Karyawan</title>
    <style>
      ul { list-style-type: none; }
      li { margin-bottom: 5px;}
      label { display: inline-block; width: 75px; }
      button { margin-left: 78px;}
    </style>
  </head>
  <body>

    <h1>Tambah Data Karyawan</h1>

    <form action="" method="post">
    
      <ul>
        <li>
          <label for="nik">NIK :</label>
          <input type="text" name="nik" id="nik" required>
        </li>
        <li>
          <label for="nama">Nama :</label>
          <input type="text" name="nama" id="nama" required>
        </li>
        <li>
          <label for="usia">Usia :</label>
          <input type="text" name="usia" id="usia" required>
        </li>
        <li>
          <label for="email">Email :</label>
          <input type="email" name="email" id="email" required>
        </li>
        <li>
          <label for="gambar">Gambar :</label>
          <input type="text" name="gambar" id="gambar" required>
        </li>
        <br>
        <li>
          <button type="submit" name="submit">
            Tambah Data!
          </button>
        </li>
      </ul>

    </form>

    <a href="index.php">Kembali ke Daftar Karyawan</a>

  </body>
</html>