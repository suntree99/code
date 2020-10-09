<?php 

// koneksi ke database
$connectDB = mysqli_connect("localhost", "root", "", "phpdasar");

// ambil data dari tabel karyawan / query data karyawan
$result = mysqli_query($connectDB, "SELECT * FROM karyawan");

// cara lama ini maksudnya tidak memisahkan index dan function dalam file terpisah

// menampilkan keterangan error jika tidak ada database yang dimaksud (karyawan)
  // if ( !$result ) {
  //   echo mysqli_error($connectDB);
  // }

// menampilkan semua data yang diminta dalam format debuging untuk mengecek 
  // while ( $kry = mysqli_fetch_assoc($result) ) {
  //   var_dump($kry);
  // }

// beberapa cara mengambil (fetch) data dari object $result:
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
    
    <?php $i = 1; ?>
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
    <?php $i++; ?>
    <?php endwhile; ?>

  </table>

</body>
</html>