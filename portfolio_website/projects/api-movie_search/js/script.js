function searchMovie() {
   $('#movie-list').html(''); // mengosongkan movie-list setiap search
   
   $.ajax({
      url: 'http://omdbapi.com',
      type: 'get', // mengambil data
      dataType: 'json',
      data: {
         'apikey' : 'e3dad0a3',
         's' : $('#search-input').val() // mengambil value dari search-input
      },
      success: function(result) { // jik sukses jalankan function(result), result hanya variabel
         if(result.Response === "True") { // Response-nya "True" / "False", bentuknya string sesuai hasil json-nya 
            let movies = result.Search; // membuka array terluar sehingga langsug ke object movie
            
            $.each(movies, function(i, data) {
               // gunakan back-tick (`) agar bisa membuat struktur html dengan enter
               $('#movie-list').append(`
                  <div class="col-md-4">
                     <div class="card mb-3">
                        <img src="`+data.Poster+`" class="card-img-top" alt="...">
                        <div class="card-body">
                           <h5 class="card-title">`+data.Title+`</h5>
                           <h6 class="card-subtitle mb-2 text-muted">`+data.Year+`</h6>
                           <a href="#" class="card-link see-detail" data-toggle="modal" data-target="#exampleModal" data-id="`+data.imdbID+`">See Detail</a>
                        </div>
                     </div>
                  </div>
               `) // menambahkan class see-detail, data-toggle, data-target, dan data-id pada link untuk memanggil modal 
            });

            $('#search-input').val(''); // menghilangkan isi search-input

         } else {
            $('#movie-list').html(`
               <div class="col">
                  <h1 class="text-center">` + result.Error + `</h1>
               </div>
            `);
         }
      }
   });
};

$('#search-button').on('click', function() { // menangani saat tombol search diklik
   searchMovie(); // menjalankan fungsi searchMovie()
});

$('#search-input').on('keyup', function(e) { // menangani saat tombol enter dilepas setelah ditekan
   if (e.keyCode === 13) { // mengambil keycode 'enter' = 13, keycode.info
      searchMovie(); // menjalankan fungsi searchMovie()
   }
});

// event binding, karena .see-detail baru muncul saat movie-list ada isinya
$('#movie-list').on('click', '.see-detail', function() {
   
   $.ajax({
      url: 'http://omdbapi.com',
      type: 'get',
      dataType: 'json',
      data: {
         'apikey' : 'e3dad0a3',
         'i' : $(this).data('id')
      },
      success: function (movie) {
         if (movie.Response === "True") {

            $('.modal-body').html(`
               <div class="container-fluid">
                  <div class="row">
                     <div class="col-md-4">
                        <img src="`+movie.Poster+`" class="img-fluid">
                     </div>

                     <div class="col-md-8">
                        <ul class="list-group">
                           <li class="list-group-item"><h3>`+movie.Title+`</h3></li>
                           <li class="list-group-item">Released : `+movie.Released+`</li>
                           <li class="list-group-item">Genre : `+movie.Genre+`</li>
                           <li class="list-group-item">Diector : `+movie.Director+`</li>
                           <li class="list-group-item">Actors : `+movie.Actors+`</li>
                           <li class="list-group-item">Plot : `+movie.Plot+`</li>
                        </ul>
                     </div>
                  </div>
               </div>
            `);
         }
      }
   });
});