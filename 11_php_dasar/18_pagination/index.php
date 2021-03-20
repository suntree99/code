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

// pengondisian jika tombol cari ditekan
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
    <style> .halaman-aktif { font-weight: bold; color: red; } </style>
  </head>
  <body>

    <!-- menambahkan link 'logout' untuk menghapus session -->
    <a href="6_logout.php">Logout</a>
    
    <h1>Daftar Karyawan</h1>
    <!-- menambahkan link 'Tambah Data Karyawan' ke halaman 1_tambah.php -->
    <a href="1_tambah.php">Tambah Data Karyawan</a>
    <br><br>

    <!-- menambahkan form untuk search -->

    <form action="" method="post">
      <input type="text" name="keyword" size="40px" autofocus placeholder="masukkan keyword pencarian..." autocomplete="off">
      <!-- autofocus berfungsi agar element tersebut langsung aktif saat halaman dibuka -->
      <!-- placeholder berfungsi untuk menampilkan kata-kata contoh/perintah -->
      <!-- autocomplete berfungsi untuk memberikan saran kata yang pernah dimasukkan -->
      <button type="submit" name="cari">Cari!</button>
      <br><br>
    </form>

    <!----------------------------->
    <!-- Membuat navigasi -->

    <!-- membuat navigasi ke kiri (<<) -->
    <?php if( $halamanAktif > 1 ) : ?>  <!-- pengondisian untuk menampilkan tanda (<<)  -->
      <a href="?halaman=<?= $halamanAktif-1; ?>">&laquo;</a> <!-- tanda &laquo (<<) ketika diklik mengurangi nomor halaman -->
    <?php endif; ?>

    <!-- membuat halaman navigasi (1 2 3..) -->
    <?php for ( $i = 1; $i <= $jumlahHalaman; $i++ ) : ?> <!-- pengulangan jumlah halaman -->
      <?php if( $i == $halamanAktif ) : ?> <!-- pengondisian untuk style halaman aktif -->
        <!-- tujuan link ke halaman yang sama dengan menambah "?halaman=" dan $i -->
        <a href="?halaman=<?= $i; ?>" class="halaman-aktif"><?= $i ?></a> <!-- menambahkan style untuk halaman aktif -->
      <?php else : ?>
        <a href="?halaman=<?= $i; ?>"><?= $i ?></a>
      <?php endif;  ?>
    <?php endfor; ?>

    <!-- membuat navigasi ke kanan (>>) -->
    <?php if( $halamanAktif < $jumlahHalaman ) : ?> <!-- pengondisian untuk menampilkan tanda (>>)  -->
      <a href="?halaman=<?= $halamanAktif+1; ?>">&raquo;</a> <!-- tanda &raquo (>>) ketika diklik menambah nomor halaman -->
    <?php endif; ?>
    <!----------------------------->

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
      
      <!-- inisialisasi index -->
      <?php $i = 1; ?>
      <!-- mengambil setiap baris data sebagai $row dari $karyawan (data tabel dalam bentuk array) -->
      <?php foreach ( $karyawan as $row ) : ?> 

      <tr>
        <td><?= $i; ?></td>
        <td>
          <!-- menambahkan link 'ubah' untuk berpindah ke halaman 3_ubah.php dan mengirimkan data 'id' menggunakan $_GET["id"] -->
          <a href="3_ubah.php?id=<?= $row["id"]; ?>">ubah</a> | 
          <a href="2_hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('Apakah anda yakin data ini ingin DIHAPUS?');">hapus</a>
          <!-- menambahkan link 'hapus' untuk berpindah ke halaman 2_hapus.php dan mengirimkan data 'id' menggunakan $_GET["id"] -->
          <!-- menambahkan attribute onclick dengan function confirm untuk mengonfirmasi sebelum perintah dieksekusi -->
        </td>
        <td><img src="img/<?= $row["gambar"]; ?>" alt="<?= $row["nama"]; ?>" width="50px"></td>
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

  </body>
</html>