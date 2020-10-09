<!-- membuat isi body dokumen HTML untuk karyawan -->

<div class="container mt-5">

   
        <div class="col-6"></div>
            <h3>Daftar Karyawan</h3>

            <?php foreach( $data['kry'] as $kry ) : ?>
                <ul>
                    <li><?= $kry['nama'];?></li>
                    <li><?= $kry['nik'];?></li>
                    <li><?= $kry['usia'];?></li>
                    <li><?= $kry['email'];?></li>
                </ul>
            <?php endforeach; ?>

        </div>
 

</div>