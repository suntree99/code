<?php 

// menghubungkan code file functions.php ke dalam file ini
require 'functions.php';

$karyawan = query("SELECT * FROM karyawan");

// menambahkan form untuk search
// autofocus berfungsi agar element tersebut langsung aktif saat halaman dibuka
// placeholder memberikan kata-kata contoh/perintah
// autocomplete berfungsi memerikan saran kata yang pernah dimasukkan

// mengecek jika jika tombol cari diklik
if ( isset($_POST["cari"]) ) {
  // eksekusi function cari
  $karyawan = cari($_POST["keyword"]);
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Halaman Admin</title>
  </head>
  <body>
    
    <h1>Daftar Karyawan</h1>
    <a href="1_tambah.php">Tambah Data Karyawan</a>
    <br><br>

    <form action="" method="post">
      <input type="text" name="keyword" size="40px" autofocus placeholder="masukkan keyword pencarian..." autocomplete="off">
      <button type="submit" name="cari">Cari!</button>
      <br><br>
    </form>

    <table border="1" cellpadding="10" cellspacing="0">

      <tr>
        <th>No.</th>
        <th>Aksi</th>
        <th>Gambar</th>
        <th>NIK</th>
        <th>Nama</th>
        <th>Usia</th>
        <th>Email</th>
      </tr>
      
      <?php $i = 1;  ?>
      <?php foreach ( $karyawan as $row ) : ?>

      <tr>
        <td><?= $i; ?></td>
        <td>
          <a href="3_ubah.php?id=<?= $row["id"]; ?>">ubah</a> | 
          <a href="2_hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('Yakin mau DIHAPUS?');">hapus</a>
        </td>
        <td><img src="img/<?= $row["gambar"]; ?>" alt="<?= $row["nama"]; ?>" width="50px"></td>
        <td><?= $row["nik"]; ?></td>
        <td><?= $row["nama"]; ?></td>
        <td><?= $row["usia"]; ?></td>
        <td><?= $row["email"]; ?></td>
      </tr>

      <?php $i++; ?>
      <?php endforeach; ?>

    </table>

  </body>
</html>
