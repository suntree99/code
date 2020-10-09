// memanggil JQuery(document)
$(document).ready( function() {

  // hilangkan tombol cari
  $('#tombolCari').hide();

  // event ketika keyword ditulis
  $('#keyword').on('keyup', function() {
    // munculkan icon loading
    $('.loader').show(); // loading ditampilkan

    // ajax menggunakan .load()
    // $('#container').load('ajax/karyawan.php?keyword=' + $("#keyword").val());

    // ajax menggunakan $.get()
    $.get('ajax/karyawan.php?keyword=' + $('#keyword').val(), function(data) {

      $('#container').html(data); // mengisi #container dengan .html() -> seperti innerHTML
      $('.loader').hide(); // loding dihilangkan

    });

  });

});
