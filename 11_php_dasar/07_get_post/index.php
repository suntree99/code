<title>GET & POST</title>

<a href="latihan1_get_link1.php">Latihan 1 - Get - Link1</a><br>
<a href="latihan2_get_link2.php">Latihan 2 - Get - Link2 (Redirect ke Latihan 1 - Get - Link1)</a><br>
<a href="latihan3_get_form.php">Latihan 3 - Get - Form</a><br>
<a href="latihan4_post_form1.php">Latihan 4 - Post - Form1</a><br>
<a href="latihan5_post_form2.php">Latihan 5 - Post - Form2 (Redirect ke Latihan 4 - Post - Form1)</a><br>
<a href="login/login.php">Latihan 6 - Halaman Login</a>
<hr>

<?php 

// Variable Scope / lingkup variabel
$x = 10;

// GLOBAL
function tampilX() {
  global $x; // tanpa global maka fungsinya error karena function tidak bisa mengakses variable di luar function
  echo $x;
}

tampilX(); // menjalankan fungsi tampilX()

// SUPERGLOBAL
// merupakan variabel global milik php
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
