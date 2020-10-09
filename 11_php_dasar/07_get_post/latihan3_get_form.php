<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Get - Form</title>
</head>
<body>

  <?php if ( isset ($_GET["submit"]) ) : ?>
      <h1>Halo, Selamat Datang <?= $_GET["nama"]; ?>!</h1>
  <?php endif; ?>
  
  <!-- nilai atribut default dari form: action="" method="get", data akan dikirim ke halaman ini sendiri --> 
  <form action="" method="get">
    <label for="nama">Masukkan nama :</label>
    <input type="text" name="nama" id="nama">
    <br>
    <button type="submit" name="submit">Kirim!</button>
  </form>

</body>
</html>
