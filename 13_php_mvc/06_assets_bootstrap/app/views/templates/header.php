<!-- template header dokumen HTML dengan input parameter $data['judul'] -->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Halaman <?= $data['judul']; ?></title>
  <!-- menambahkan css bootstrap -->
  <link rel="stylesheet" href="<?= BASEURL; ?>/css/bootstrap.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
<div class="container"> <!-- menambahkan div.container agar tidak terlalu mepet, atur sesuai kebutuhan -->
  <a class="navbar-brand" href="<?= BASEURL; ?>">PHP MVC</a> <!-- mengganti nama dan href -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="<?= BASEURL; ?>">Home<span class="sr-only">(current)</span></a> <!-- mengganti nama dan href -->
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= BASEURL; ?>/about">About</a> <!-- mengganti nama dan href -->
      </li>
      <!-- menghapus tab yang tidak diperlukan -->
    </ul>
  </div>
</div>
</nav>