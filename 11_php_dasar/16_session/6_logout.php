<?php 

// menjalankan session
session_start();

// menghapus session
$_SESSION=[];
session_unset(); // mengosongkan session
session_destroy(); // menghancurkan session

header("Location: 5_login.php");
exit;

?>