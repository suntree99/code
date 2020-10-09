<?php 

// Jika data belum terisi - user mencoba masuk melalui url
if  ( !isset ($_POST["nama"]) ) {
  // redirect
  header ("Location: latihan4_post_form.php");
  exit;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Post</title>
</head>
<body>
  
  <h1>Halo, Selamat Datang <?= $_POST["nama"]; ?>!</h1>

</body>
</html>
