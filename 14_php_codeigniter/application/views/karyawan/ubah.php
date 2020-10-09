<div class="container">
   <div class="row mt-3">
      <div class="col-md-6">

         <div class="card">
            <div class="card-header">
               Form Ubah Data Karyawan
            </div>
            <div class="card-body">
               <?php if (validation_errors()) : ?>
                  <div class="alert alert-danger" role="alert">
                     <?= validation_errors(); ?>
                  </div>
               <?php endif; ?>
               <form action="" method="POST">
                  <input type="hidden" name="id" value="<?= $karyawan['id']; ?>">
                  <div class="form-group">
                     <label for="nama">Nama</label>
                     <input type="text" name='nama' class="form-control" id="nama" value="<?= $karyawan['nama'] ?>">
                  </div>
                  <div class="form-group">
                     <label for="nik">NIK</label>
                     <input type="text" name='nik' class="form-control" id="nik" value="<?= $karyawan['nik'] ?>">
                  </div>
                  <div class="form-group">
                     <label for="email">Email</label>
                     <input type="text" name='email' class="form-control" id="email" value="<?= $karyawan['email'] ?>">
                  </div>
                  <div class="form-group">
                     <label for="usia">Usia</label>
                     <input type="text" name='usia' class="form-control" id="usia" value="<?= $karyawan['usia'] ?>">
                  </div>

                  <div class="form-group">
                     <label for="jenis">Jenis Kelamin</label>
                     <select class="form-control" id="jenis" name="jenis" value="<?= $karyawan['jenis'] ?>">
                        <?php foreach ($jenis as $j) : ?>
                           <?php if ($j == $karyawan['jenis']) : ?>
                              <option value="<?= $j; ?>" selected><?= $j; ?></option>
                           <?php else : ?>
                              <option value="<?= $j; ?>"><?= $j; ?></option>
                           <?php endif; ?>
                        <?php endforeach ?>
                     </select>
                  </div>

                  <div class="form-group">
                     <label for="gambar">Gambar</label>
                     <input type="text" name='gambar' class="form-control" id="gambar" value="<?= $karyawan['gambar'] ?>">
                  </div>

                  <button type="submit" name="tambah" class="btn btn-primary">Ubah Data</button>
               </form>
            </div>
         </div>


      </div>
   </div>
</div>