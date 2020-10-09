<!-- membuat isi body dokumen HTML untuk detail -->

<div class="container mt-5">

    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"><?= $data['kry']['nama']; ?></h5>
            <h6 class="card-subtitle mb-2 text-muted">NIK : <?= $data['kry']['nik']; ?></h6>
            <p class="card-text" style="margin-bottom: 0;">Usia : <?= $data['kry']['usia']; ?> tahun</p>
            <p class="card-text" style="margin-bottom: 0;">Jenis Kelamin : <?= $data['kry']['jenis']; ?></p>
            <p class="card-text">Email : <?= $data['kry']['email']; ?></p>
            <a href="<?= BASEURL ?>/karyawan" class="card-link">Kembali</a>
        </div>
    </div>

</div>