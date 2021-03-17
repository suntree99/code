<?php

// menjalankan session
session_start();

// Session adalah mekanisme penyimpanan informasi ke dalam variabel
// agar bisa digunakan di LEBIH DARI SATU HALAMAN.
// Session disimpan di SERVER

// mengembalikan ke halaman index jika sudah berhasil login
if ( isset($_SESSION["login"]) ) {
  header("Location: index.php");
  exit;
}

// menghubungkan dengan perintah dari file functions.php
require 'functions.php';

// mengecek jika tombol login diklik
if ( isset($_POST["login"]) ) {

  $username = $_POST["username"];
  $password = $_POST["password"];

  $result = mysqli_query($connectDB, "SELECT * FROM user WHERE username = '$username'");

  if ( mysqli_num_rows($result) === 1 ) {
  
    $row = mysqli_fetch_assoc($result);
    if ( password_verify($password, $row["password"]) ) {
      
      // mengeset SESSION
      $_SESSION["login"] = true;

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
    <style>
        ul { list-style-type: none; }
        li { margin-bottom: 10px;}
        label { display: inline-block; width: 75px;}
        button { margin-left: 78px; margin-top: 10px;}
      </style>
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
