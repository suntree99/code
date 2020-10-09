<a href="latihan1_get.php">Latihan 1 - Get</a>
<br>
<a href="latihan2_get.php">Latihan 2 - Get (Redirect ke Latihan 1 - Get)</a>
<br>
<a href="latihan3_get_form.php">Latihan 3 - Get - Form</a>
<br>
<a href="latihan4_post_form.php">Latihan 4 - Post - Form</a>
<br>
<a href="latihan5_post.php">Latihan 5 - Post (Redirect ke Latihan 4 - Post)</a>
<br>
<a href="login/login.php">Latihan 6 - Halaman Login</a>
<hr>

<title>GET & POST</title>

<?php 

// Variable Scope / lingkup variabel
$x = 10;

// GLOBAL
function tampilX() {
  global $x; // tanpa global maka fungsinya error karena function tidak bisa mengakses variable di luar function
  echo $x;
}

tampilX();

// SUPERGLOBAL
// variabel global milik php
// merupakan array asosiatif
// - $_GET
// - $_POST
// - $_REQUEST
// - $_SESSION
// - $_COOKIE
// - $_SERVER
// - $_ENV

// PR : cari tau tentang function EMPTY

?>
