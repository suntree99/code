<?php

// -------------------------
// menjalankan session
session_start();

// menghubungkan code file functions.php ke dalam file ini
require 'functions.php';

// -------------------------

// mengecek cookie
if (isset($_COOKIE['id']) && isset($_COOKIE['key'])) {
  $id = $_COOKIE['id'];
  $key = $_COOKIE['key'];

  // mengambil username berdasarkan id dari cookie
  $result = mysqli_query($connectDB, "SELECT username FROM user WHERE id = $id");
  $row = mysqli_fetch_assoc($result); // mengambil rincian data dalam bentuk array asosiatif

  // pengondisian jika key dari cookie sama dengan username dari database (terenkripsi)
  if ($key === hash('sha256', $row['username'])) {
    // mengeset session dan menyimpannya ke dalam server
    $_SESSION['login'] = true;
  }
}
// -------------------------

// pengondisian jika sudah berhasil login
if (isset($_SESSION["login"])) {
  header("Location: index.php"); // berpindak ke halaman index
  exit;
}
// -------------------------

// SESSION adalah mekanisme penyimpanan informasi ke dalam variabel superglobal $_SESSION
// agar bisa digunakan di LEBIH DARI SATU HALAMAN, SESSION disimpan di dalam SERVER

// COOKIE adalah informasi yang bisa diakses dimana saja di halaman web (browser)
// COOKIE disimpan di dalam BROWSER (CLIENT), sehingga bisa dimanipulasi (buat, edit, dan hapus)

// pengondisian jika tombol login diklik
if (isset($_POST["login"])) {
  // menangkap username dan password yang diinput
  $username = $_POST["username"];
  $password = $_POST["password"];

  // melakukan queri dengan username yang diinput
  $result = mysqli_query($connectDB, "SELECT * FROM user WHERE username = '$username'");

  // pengondisian jika username ada di dalam database
  if (mysqli_num_rows($result) === 1) { // jumlah rows dalam database, nilai 1 berarti ada

    // mengecek kecocokan password yang diinput ($password) dengan password di database ($row["password"])
    $row = mysqli_fetch_assoc($result);
    if (password_verify($password, $row["password"])) { // jika cocok masuk ke halaman index.php

      // -------------------------
      // mengeset session dan menyimpannya ke dalam server
      $_SESSION["login"] = true;

      // pengondisian jika remember me dicentang
      if (isset($_POST['remember'])) {
        // mengeset cookie (key, value, durasi expired)
        setcookie('id', $row['id'], time() + 60);
        setcookie('key', hash('sha256', $row['username']), time() + 60); // melakukan generate username dengan hash(algoritma, string)    
      }
      // -------------------------

      header("Location: index.php");
      exit; // keluar dari pembacaan kode, kode di bawah tidak dieksekusi
    }
  }

  $error = true;
}

?>

<!DOCTYPE html>
<html lang="en">

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Halaman Login</title>

  </head>

  <body>

    <h1 class="text-center mt-5 mb-5">Halaman Login</h1>

    <?php if (isset($error)) : ?>
      <!-- jika setelah tombol login diklik menghasilkan $error  -->
      <p class="text-center text-danger fst-italic">username / password salah</p>
    <?php endif; ?>

    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-6">
          <form action="" method="post">
            <!-- data $_POST dikirim ke halaman ini juga -->
            <div>
              <label class="form-label" for="username">Username :</label>
              <input class="form-control mb-3" type="text" name="username" id="username">
            </div>
            <div>
              <label class="form-label" for="password">Password :</label>
              <input class="form-control mb-3" type="password" name="password" id="password">
            </div>
            <!-- menambahkan check-box remember me -->
            <div>
              <input type="checkbox" name="remember" id="remember">
              <label class="form-label" for="remember">Remember me</label>
            </div>
            <div>
              <button class="btn btn-primary m-auto mt-3 d-flex justify-content-center" type="submit" name="login">Login</button>
              <a class="btn btn-outline-primary mt-5 d-flex justify-content-center" href="4_registrasi.php">Registrasi</a>
            </div>
          </form>
        </div>
      </div>
    </div>

    <!-- SVG Path -->
    <section>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#0d6efd" fill-opacity="1" d="M0,288L30,282.7C60,277,120,267,180,234.7C240,203,300,149,360,144C420,139,480,181,540,218.7C600,256,660,288,720,272C780,256,840,192,900,186.7C960,181,1020,235,1080,266.7C1140,299,1200,309,1260,304C1320,299,1380,277,1410,266.7L1440,256L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"></path>
      </svg>
    </section>
    <!-- Akhir SVG Path  -->

    <!-- Footer -->
    <footer class="bg-primary text-white text-center pb-5">
      <p class="pt-5">
        by <span class="fw-bold">Budi Darmawan</span>
      </p>
    </footer>
    <!-- Akhir Footer -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

  </body>

</html>