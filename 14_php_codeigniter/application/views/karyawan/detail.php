<div class="container">
   <div class="row mt-3">
      <div class="col-md-6">
         <div class="card">
            <div class="card-header">
               Featured
            </div>
            <div class="card-body">
               <h5 class="card-title"><?= $karyawan['nama']; ?></h5>
               <h6 class="card-subtitle mb-2 text-muted"><?= $karyawan['nik']; ?></h6>
               <p class="card-text"><?= $karyawan['email']; ?></p>
               <p class="card-text"><?= $karyawan['usia']; ?> Tahun</p>
               <p class="card-text"><?= $karyawan['jenis']; ?></p>
               <a href="<?= base_url() ?>karyawan" class="btn btn-primary">Kembali</a>
            </div>
         </div>
      </div>
   </div>
</div>