<?php 

// menghubungkan code file functions.php ke dalam file ini
require 'functions.php';

// pengondisian jika tombol login diklik
if ( isset($_POST["login"]) ) {
  // menangkap username dan password yang diinput
  $username = $_POST["username"];
  $password = $_POST["password"];
  
  // melakukan queri dengan username yang diinput
  $result = mysqli_query($connectDB, "SELECT * FROM user WHERE username = '$username'");

  // pengondisian jika username ada di dalam database
  if ( mysqli_num_rows($result) === 1 ) { // jumlah rows dalam database, nilai 1 berarti ada
  
    // mengecek kecocokan password yang diinput ($password) dengan password di database ($row["password"])
    $row = mysqli_fetch_assoc($result);
    if ( password_verify($password, $row["password"]) ) { // jika cocok masuk ke halaman index.php
      header("Location: index.php");
      exit; // keluar dari pembacaan kode, kode di bawah tidak dieksekusi
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
    <style>
      ul { list-style-type: none; }
      li { margin-bottom: 10px;}
      label { display: inline-block; width: 75px;}
      button { margin-left: 78px; margin-top: 10px;}
    </style>
  </head>
  <body>
    
    <h1>Halaman Login</h1>
    
    <?php if ( isset($error) ) : ?> <!-- jika setelah tombol login diklik menghasilkan $error  -->
      <p style="color:red; font-style:italic">username / password salah</p>
    <?php endif; ?>

    <form action="" method="post"> <!-- data $_POST dikirim ke halaman ini juga -->

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