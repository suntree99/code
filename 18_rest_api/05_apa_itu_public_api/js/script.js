$('#search-button').on('click', function() {
   $.ajax({
      url: 'http://omdbapi.com',
      type: 'get',
      dataType: 'json',
      data: {
         'apikey' : 'e3dad0a3',
         's' : $('#search-input').val()
      },
      success: function(result) {
         if(result.Response == "True") {

         } else {
            $('#movie-list').html('<h1>Movie Not Found</h1>');
         }
      }
   });
});