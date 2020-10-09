<?php 

// Variable Scope / lingkup variabel
$x = 10;

// GLOBAL
function tampilX() {
  global $x; // tanpa global maka fungsi error karena function tidak bisa mengakses variable di luar function
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

?>

