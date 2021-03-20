<?php 

// settingan koneksi ke database | mysqli_connect("hostname", "username", "password", "database")
$connectDB = mysqli_connect("localhost", "root", "", "phpdasar");

// menghentikan pembacaan code jika koneksi gagal
if (!$connectDB) {
  // echo "Error Number : " . mysqli_connect_errno() . " | Description : " . mysqli_connect_error();
  exit;
}

// (query) mengambil data tabel dari database dan menampungnya di variabel $result
$result = mysqli_query($connectDB, "SELECT * FROM karyawan");

// CARA LAMA INI MAKSUDNYA TIDAK MEMISAHKAN INDEX DAN FUNCTION DALAM FILE TERPISAH

// menampilkan keterangan error jika tidak ada database yang dimaksud (karyawan)
  // if ( !$result ) {
  //   echo mysqli_error($connectDB);
  // }

// debuging data - menampilkan semua data yang diminta dalam format debuging untuk pengecekan 
  // while ( $kry = mysqli_fetch_assoc($result) ) {
  //   var_dump($kry);
  // }

// beberapa cara mengambil (fetch) data :
  // mysqli_fetch_row() - mengembalikan array numerik
  // mysqli_fetch_assoc() - mengembalikan array associative
  // mysqli_fetch_array() - mengembalikan array keduanya (numerik & associative) - data dobel
  // mysqli_fetch_object() - mengembalikan object - diambil dengan panah (->)

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Halaman Admin</title>
  </head>
  <body>
    
    <h1>Daftar Karyawan</h1>

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
      <!-- mengambil setiap baris data sebagai $row dari $result menggunakan mysqli_fetch_assoc() -->
      <?php while ( $row = mysqli_fetch_assoc($result) ) : ?>

      <tr>
        <td><?= $i; ?></td>
        <td>
          <a href="">ubah</a> | 
          <a href="">hapus</a>
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
      <?php endwhile; ?>

    </table>

  </body>
</html>