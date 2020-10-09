$(function () {

   $('.tombolTambahData').on('click', function () {
      $('#judulModal').html('Tambah Data Karyawan');
      $('.modal-footer button[type=submit]').html('Tambah Data');
   })

   $('.tampilModalUbah').on('click', function () {
      $('#judulModal').html('Ubah Data Karyawan');
      $('.modal-footer button[type=submit]').html('Ubah Data');
      $('.modal-body form').attr('action', 'http://localhost/10_php_mvc/12_update_data_ajax/public/karyawan/ubah');

      const id = $(this).data('id');

      $.ajax({
         url: 'http://localhost/10_php_mvc/12_update_data_ajax/public/karyawan/getUbah',
         data: {
            id: id
         },
         method: 'post',
         dataType: 'json',
         success: function (data) {
            $('#nama').val(data.nama);
            $('#nik').val(data.nik);
            $('#email').val(data.email);
            $('#usia').val(data.usia);
            $('#gambar').val(data.gambar);
            $('#jenis').val(data.jenis);
            $('#id').val(data.id);
         }
      });

   })

})