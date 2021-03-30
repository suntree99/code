<?php

// menghubungkan code file functions.php ke dalam file ini
require 'functions.php';

// pengondisian jika tombol register ditekan
if (isset($_POST["register"])) {

  // mengecek apakah registrasi berhasil dilakukan atau tidak
  if (registrasi($_POST) > 0) {
    echo "<script>
          alert('User baru BERHASIL ditambahkan');
          </script>";
  } else {
    echo mysqli_error($connectDB);
  }
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

    <title>Halaman Registrasi</title>

  </head>

  <body>

    <h1 class="text-center mt-5 mb-5">Halaman Registrasi</h1>

    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-6">
          <form action="" method="post">
            <div>
              <label class="form-label" for="username">Username :</label>
              <input class="form-control mb-3" type="text" name="username" id="username" required>
            </div>
            <div>
              <label class="form-label" for="password">Password :</label>
              <input class="form-control mb-3" type="password" name="password" id="password" required>
            </div>
            <div>
              <label class="form-label" for="password2">Konfimasi Password :</label>
              <input class="form-control mb-3" type="password" name="password2" id="password2" required>
            </div>
            <div>
              <button class="btn btn-primary m-auto mt-3 d-flex justify-content-center" type="submit" name="register">Register!</button>
              <a class="btn btn-outline-primary mt-5 d-flex justify-content-center" href="5_login.php">Ke Halaman Login</a>
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