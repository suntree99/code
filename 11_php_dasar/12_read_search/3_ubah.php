<?php 

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
    <meta charset="UTF-8">
    <title>Ubah Data Karyawan</title>
    <style>
        ul { list-style-type: none; }
        li { margin-bottom: 5px;}
        label { display: inline-block; width: 75px; }
        button { margin-left: 78px;}
    </style>
  </head>
  <body>

    <h1>Ubah Data Karyawan</h1>

    <form action="" method="post">

      <!-- menambahkan element input untuk id dengan type="hidden" agar tidak terlihat oleh user -->
      <input type="hidden" name="id" value="<?= $kry["id"]; ?>">

      <!-- menambahkan attribute value pada setiap elemen input untuk menampilkan setiap nilai sebelumnya -->
      <ul>
        <li>
          <label for="nik">NIK :</label>
          <input type="text" name="nik" id="nik" required value="<?= $kry["nik"]; ?>">
        </li>
        <li>
          <label for="nama">Nama :</label>
          <input type="text" name="nama" id="nama" required value="<?= $kry["nama"]; ?>">
        </li>
        <li>
          <label for="usia">Usia :</label>
          <input type="text" name="usia" id="usia" required value="<?= $kry["usia"]; ?>">
        </li>
        <li>
          <label for="email">Email :</label>
          <input type="email" name="email" id="email" required value="<?= $kry["email"]; ?>">
        </li>
        <li>
          <label for="gambar">Gambar :</label>
          <input type="text" name="gambar" id="gambar" required value="<?= $kry["gambar"]; ?>">
        </li>
        <br>
        <li>
          <button type="submit" name="submit">
            Ubah Data!
          </button>
        </li>
      </ul>

    </form>

    <a href="index.php">Kembali ke Daftar Karyawan</a>

  </body>
</html>