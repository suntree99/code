<?php 

// Jika data belum terpenuhi - misal user mencoba masuk melalui url
if  ( !isset ($_POST["nama"]) ) {
  // lakukan redirect
  header ("Location: latihan4_post_form1.php");
  exit;
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Post - Form</title>
  </head>
  <body>
    
    <h1>Halo, Selamat Datang <?= $_POST["nama"]; ?>!</h1>

  </body>
</html>
