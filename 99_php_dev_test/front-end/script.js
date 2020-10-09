// memanggil JQuery(document)
$(document).ready( function() {

  // hilangkan waktu login
  $('.waktulogin').hide();
  
  $('#hello').click(function(){
    // munculkan waktu login
    $('.waktulogin').show();
  });

});

    // menjalankan fungsi saat halaman dibuka
    $(function() {
      setInterval(timestamp, 1000); // reload fungsi setiap detik, 1000 = 1 detik
      });
      
      //fungsi ajax untuk menampilkan waktu dengan mengakses file functions.php
      function timestamp() {
        $.ajax({
          url: 'realtime.php',
          success: function(data) { $('#timestamp').html(data); },
          });
      }