<!-- membuat isi body dokumen HTML untuk karyawan -->

<div class="container mt-5">

        <div class="col-6"></div>
            <h3>Daftar Karyawan</h3>          
            <!-- mengganti list dengan list bootstrap -->
            <ul class="list-group">
                <?php foreach( $data['kry'] as $kry ) : ?>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <?= $kry['nama']; ?>
                        <!-- menambah link detail-->
                        <a href="<?= BASEURL; ?>/karyawan/detail/<?= $kry['id']; ?>" class="badge badge-primary">detail</a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>

</div>