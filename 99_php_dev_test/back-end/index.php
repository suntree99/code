<?php 

session_start();

if ( !isset($_SESSION["login"]) ) {
  header("Location: login.php");
  exit;
}

// menghubungkan dengan perintah dari file functions.php
require 'functions.php';

// waktu

// date_default_timezone_set('Asia/Jakarta');//Menyesuaikan waktu dengan tempat kita tinggal
// echo $timestamp = date('H:i:s');//Menampilkan Jam Sekarang

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Halaman Home</title>
	<link rel="stylesheet" href="../front-end/style.css">
  <script src="../front-end/jquery-3.4.1.min.js"></script>
  <script src="../front-end/script.js"></script>
</head>
<body>
  
  <a href="logout.php">Logout</a>

  <h1 id="timestamp"></h1>

  <button id="hello">Hello</button>

  <div class="waktulogin">Waktu Login</div>

  <script>
    // // menjalankan fungsi saat halaman dibuka
    // $(function() {
    // setInterval(timestamp, 1000); // reload fungsi setiap detik, 1000 = 1 detik
    // });
    
    // //fungsi ajax untuk menampilkan waktu dengan mengakses file functions.php
    // function timestamp() {
    //   $.ajax({
    //     url: 'realtime.php',
    //     success: function(data) { $('#timestamp').html(data); },
    //     });
    // }

  </script>

</body>
</html>