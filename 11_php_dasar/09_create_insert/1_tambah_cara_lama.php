<?php 

// settingan koneksi ke database
$connectDB = mysqli_connect("localhost", "root", "", "phpdasar");

// mengecek jika tombol submit sudah ditekan
if ( isset($_POST["submit"]) ) {

  // ambil data dari tiap elemen dalam form
  $nama = htmlspecialchars($_POST["nama"]);
  $nik = htmlspecialchars($_POST["nik"]);
  $usia = htmlspecialchars($_POST["usia"]);
  $email = htmlspecialchars($_POST["email"]);
  $gambar = htmlspecialchars($_POST["gambar"]);
  // htmlspecialchar() berfungsi agar syntax html yang dimasukan user tidak dieksekusi

  // query insert data
  $query = "INSERT INTO Karyawan VALUES
            ('', '$nama', '$nik', '$usia', '$email', '$gambar')";

  // mengeksekusi query
  mysqli_query($connectDB, $query);

  // mengecek perubahan data
  // apakah data berhasil ditambahkan atau tidak
  if ( mysqli_affected_rows($connectDB) > 0 ) {
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
    echo "<br>";
    echo mysqli_error($connectDB);
  }

}

?>

<!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Tambah Data Karyawan</title>
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
          <input type="text" name="nama" id="nama">
        </li>
        <li>
          <label for="usia">Usia :</label>
          <input type="text" name="usia" id="usia">
        </li>
        <li>
          <label for="email">Email :</label>
          <input type="text" name="email" id="email">
        </li>
        <li>
          <label for="gambar">Gambar :</label>
          <input type="text" name="gambar" id="gambar">
        </li>
        <li>
          <button type="submit" name="submit">
            Tambah Data!
          </button>
        </li>
      </ul>

    </form>

    <a href="index.php">Kembali ke Halaman Data</a>

  </body>
</html>
