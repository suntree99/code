<?php 

// menghubungkan dengan perintah dari file functions.php
require 'functions.php';

$karyawan = query("SELECT * FROM karyawan");

// saat link 'ubah' diclick :
// berpindah ke halaman 3_ubah.php dan mengirimkan data $_GET["id"] kedalamnya

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