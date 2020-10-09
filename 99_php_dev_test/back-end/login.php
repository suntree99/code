<?php

session_start();

// menghubungkan dengan perintah dari file functions
require 'functions.php';

// mengecek cookie
if ( isset($_COOKIE['id']) && isset($_COOKIE['key']) ) {
  $id = $_COOKIE['id'];
  $key = $_COOKIE['key'];

  // mengambil username berdasarkan id
  $result = mysqli_query($connectDB, "SELECT username FROM user WHERE id = $id");
  $row = mysqli_fetch_assoc($result);

  // mengecek cookie dan username
  if ( $key === hash('sha256', $row['username']) ) {
       $_SESSION['login'] = true;
  }
}

if ( isset($_SESSION["login"]) ) {
  header("Location: index.php");
  exit;
}

// mengecek jika tombol login diklik
if ( isset($_POST["login"]) ) {

  $username = $_POST["username"];
  $password = $_POST["password"];

  $result = mysqli_query($connectDB, "SELECT * FROM user WHERE username = '$username'");

  if ( mysqli_num_rows($result) === 1 ) {
  
    $row = mysqli_fetch_assoc($result);
    if ( password_verify($password, $row["password"]) ) {

      $_SESSION["login"] = true;

      // mengecek remember me
      if ( isset($_POST['remember']) ) {
        // mengeset COOKIE
        setcookie('id', $row['id'], time()+60);
        setcookie('key', hash('sha256', $row['username']), time()+60); // melakukan generate username dengan hash()    
      }

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
        <input type="checkbox" name="remember" id="remember">
        <label for="remember">Remember me</label>
      </li>
      <li>
        <button type="submit" name="login">Login</button>
      </li>
    </ul>
  </form>

  <p>Belum memiliki akun? registrasi <a href="registrasi.php">disini.</a></p>

</body>
</html>
