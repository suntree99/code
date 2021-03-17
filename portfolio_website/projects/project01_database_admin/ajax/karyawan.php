<?php 

// halaman tidur, ceritanya internetnya lemot 
usleep(500000); // microsecond

// menghubungkan dengan perintah dari file functions
require '../functions.php';
$keyword = $_GET["keyword"];
$query = "SELECT * FROM karyawan WHERE
          nama LIKE '%$keyword%' OR
          nik LIKE '%$keyword%' OR
          usia LIKE '%$keyword%' OR
          email LIKE '%$keyword%'
         ";

$karyawan = query($query);

?>

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


