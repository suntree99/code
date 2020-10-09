<?php 

session_start();

$_SESSION=[];
session_unset();
session_destroy();

// menghabiskan cookie dengan mengurangi waktunya dengan cukup banyak
setcookie('id', '', time()-3600);
setcookie('key', '', time()-3600);

header("Location: 5_login.php");
exit;

?>
