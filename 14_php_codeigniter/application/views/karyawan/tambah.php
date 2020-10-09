<div class="container">
   <div class="row mt-3">
      <div class="col-md-6">

         <div class="card">
            <div class="card-header">
               Form Tambah Data Karyawan
            </div>
            <div class="card-body">
               <form action="" method="POST">
                  <div class="form-group">
                     <label for="nama">Nama</label>
                     <input type="text" name='nama' class="form-control" id="nama">
                     <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                  </div>
                  <div class="form-group">
                     <label for="nik">NIK</label>
                     <input type="text" name='nik' class="form-control" id="nik">
                     <small class="form-text text-danger"><?= form_error('nik'); ?></small>
                  </div>
                  <div class="form-group">
                     <label for="email">Email</label>
                     <input type="text" name='email' class="form-control" id="email">
                     <small class="form-text text-danger"><?= form_error('email'); ?></small>
                  </div>
                  <div class="form-group">
                     <label for="usia">Usia</label>
                     <input type="text" name='usia' class="form-control" id="usia">
                     <small class="form-text text-danger"><?= form_error('usia'); ?></small>
                  </div>

                  <div class="form-group">
                     <label for="jenis">Jenis Kelamin</label>
                     <select class="form-control" id="jenis" name="jenis">
                        <option value="Laki Laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                     </select>
                  </div>

                  <div class="form-group">
                     <label for="gambar">Gambar</label>
                     <input type="text" name='gambar' class="form-control" id="gambar">
                     <small class="form-text text-danger"><?= form_error('gambar'); ?></small>
                  </div>

                  <button type="submit" name="tambah" class="btn btn-primary">Tambah Data</button>
               </form>
            </div>
         </div>


      </div>
   </div>
</div>