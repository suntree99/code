<?php 

// halaman tidur, ceritanya internetnya lemot 
// usleep(500000); // microsecond

// menghubungkan code file functions.php ke dalam file ini
require '../functions.php';

// menangkap data keyword dari inputan user
$keyword = $_GET["keyword"];

// membuat query
$query = "SELECT * FROM karyawan WHERE
          nama LIKE '%$keyword%' OR
          nik LIKE '%$keyword%' OR
          usia LIKE '%$keyword%' OR
          email LIKE '%$keyword%' ";

// mengeksekusi query
$karyawan = query($query);

?>

<table cellpadding="10" cellspacing="0" class="m-auto">

<tr class="text-center">
    <th>No.</th>
    <th class="print-hilang">Aksi</th> <!-- menambahkan class "print-hilang" untuk style print -->
    <th>Gambar</th>
    <th>NIK</th>
    <th>Nama</th>
    <th>Usia</th>
    <th>Email</th>
  </tr>
  
  <?php $i = 1;  ?>
  <?php foreach ( $karyawan as $row ) : ?>

  <tr>
  <td class="text-center"><?= $i; ?></td>
        <td class="text-center print-hilang"> <!-- menambahkan class "print-hilang" untuk style print -->
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

  <?php $i++; ?>
  <?php endforeach; ?>

</table>