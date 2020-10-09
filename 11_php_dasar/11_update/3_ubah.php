<?php 

// menghubungkan dengan perintah dari file functions.php
require 'functions.php';

// menambahkan element input untuk id dengan type="hidden" agar tidak terlihat oleh user
// menambahkan attribute value pada setiap elemen input untuk menyimpan setiap nilai dari database

// menangkap $_GET dari halaman index.php
$id = $_GET["id"];

// melakukan query data berdasarkan id
$kry = query("SELECT * FROM Karyawan where id = $id")[0]; // perlu ditambahkan [0] karena hasil query() saja adalah berupa array numerik [0] yang berisi array data satu row 

// mengecek jika tombol submit sudah ditekan
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
</head>
<body>

  <h1>Ubah Data Karyawan</h1>

  <form action="" method="post">
    <input type="hidden" name="id" value="<?= $kry["id"]; ?>">
    <ul>
      <li>
        <label for="nik">NIK :</label>
        <input type="text" name="nik" id="nik" required value="<?= $kry["nik"]; ?>">
      </li>
      <li>
        <label for="nama">Nama :</label>
        <input type="text" name="nama" id="nama" value="<?= $kry["nama"]; ?>">
      </li>
      <li>
        <label for="usia">Usia :</label>
        <input type="text" name="usia" id="usia" value="<?= $kry["usia"]; ?>">
      </li>
      <li>
        <label for="email">Email :</label>
        <input type="text" name="email" id="email" value="<?= $kry["email"]; ?>">
      </li>
      <li>
        <label for="gambar">Gambar :</label>
        <input type="text" name="gambar" id="gambar" value="<?= $kry["gambar"]; ?>">
      </li>
      <li>
        <button type="submit" name="submit">
          Ubah Data!
        </button>
      </li>
    </ul>

  </form>

  <a href="index.php">Kembali ke Halaman Data Karyawan</a>

</body>
</html>