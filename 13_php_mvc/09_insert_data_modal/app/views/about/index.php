<!-- isi body dokumen HTML -->

<div class="container"> <!-- menambahkan div.container -->

    <h1 class="mt-4">Tentang Saya</h1> <!-- menambahkan margin mt-4 (format bootstrap) -->
    <img src="<?= BASEURL; ?>/img/avatar1.png" alt="Gambar" width="100" class="rounded-circle shadow"> <!-- menambahkan gambar dengan attribute-nya -->
    <p>Halo, nama saya <?= $data['nama']; ?>, umur saya <?= $data['umur']; ?>, saya adalah seorang <?= $data['pekerjaan']; ?>. </p>

</div>