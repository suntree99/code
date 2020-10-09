<?php 

// menghubungkan dengan perintah dari file functions.php
require 'functions.php';

// mengecek jika tombol login diklik
if ( isset($_POST["login"]) ) {
  // menangkap username dan password yang diinput
  $username = $_POST["username"];
  $password = $_POST["password"];
  
  // melalkukan queri dengan username yang diinput
  $result = mysqli_query($connectDB, "SELECT * FROM user WHERE username = '$username'");

  // mengecekcek username di dalam database
  if ( mysqli_num_rows($result) === 1 ) { // jumlah rows dalam database, nilai 1 berarti ada
  
    // mengecek kecocokan password
    $row = mysqli_fetch_assoc($result);
    if ( password_verify($password, $row["password"]) ) {
      header("Location: index.php");
      exit;
    }
  }

  $error = true;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Halaman Login</title>
</head>
<body>
  
  <h1>Halaman Login</h1>
  
  <?php if ( isset($error) ) : ?>
    <p style="color:red; font-style:italic">username / password salah</p>
  <?php endif; ?>

  <form action="" method="post">
    <ul>
      <li>
        <label for="username">Username :</label>
        <input type="text" name="username" id="username">
      </li>
      <li>
        <label for="password">Password :</label>
        <input type="password" name="password" id="password">
      </li>
      <li>
        <button type="submit" name="login">Login</button>
      </li>
    </ul>
  </form>

  <p>Belum memiliki akun? registrasi <a href="4_registrasi.php">disini.</a></p>
  
</body>
</html>