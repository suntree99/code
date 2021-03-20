<?php 

// settingan koneksi ke database | mysqli_connect("hostname", "username", "password", "database")
$connectDB = mysqli_connect("localhost", "root", "", "phpdasar");

// pengondisian alert jika tombol submit ditekan
if ( isset($_POST["submit"]) ) {

  // mengambil data dari tiap elemen dalam form
  $nama = htmlspecialchars($_POST["nama"]);
  $nik = htmlspecialchars($_POST["nik"]);
  $usia = htmlspecialchars($_POST["usia"]);
  $email = htmlspecialchars($_POST["email"]);
  $gambar = htmlspecialchars($_POST["gambar"]);
  // htmlspecialchar() berfungsi agar syntax html yang diinputkan user kedalam form tidak dieksekusi

  // query insert data, kosongkan id karena disi otomatis ('')
  // tambahkan kutip (') pada setiap variabel karen type-nya string
  $query = "INSERT INTO Karyawan VALUES
            ('', '$nama', '$nik', '$usia', '$email', '$gambar')";

  // mengeksekusi query
  mysqli_query($connectDB, $query);

  // mengecek apakah data berhasil ditambahkan atau tidak
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
    <style>
      ul { list-style-type: none; }
      li { margin-bottom: 5px;}
      label { display: inline-block; width: 75px; }
      button { margin-left: 78px;}
    </style>
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
          <input type="text" name="nama" id="nama" required>
        </li>
        <li>
          <label for="usia">Usia :</label>
          <input type="text" name="usia" id="usia" required>
        </li>
        <li>
          <label for="email">Email :</label>
          <input type="email" name="email" id="email" required>
        </li>
        <li>
          <label for="gambar">Gambar :</label>
          <input type="text" name="gambar" id="gambar" required>
        </li>
        <br>
        <li>
          <button type="submit" name="submit">
            Tambah Data!
          </button>
        </li>
      </ul>

    </form>

    <a href="index.php">Kembali ke Daftar Karyawan</a>

  </body>
</html>