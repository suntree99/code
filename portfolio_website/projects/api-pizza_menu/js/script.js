// $.ajax() fungsi untuk memanggil ajax, tetapi untuk JSON bisa menggunakan $.getJSON()

// fungsi menampilkan semua menu
function tampilkanSemuaMenu() {
  $.getJSON("data/pizza.json", function (data) {
    let menu = data.menu;
    $.each(menu, function (i, data) { // looping terhadap object
      $("#daftar-menu").append( // memanggil div #daftar-menu dan menambahkan element html
        '<div class="col-md-4"><div class="card mb-3"><img src="img/menu/' +
          data.gambar +
          '" class="card-img-top" alt="..."><div class="card-body"><h5 class="card-title">' +
          data.nama +
          '</h5><p class="card-text">' +
          data.deskripsi +
          '</p><h5 class="card-title">Rp. ' +
          data.harga +
          '</h5><a href="#" class="btn btn-primary">Pesan Sekarang</a></div></div></div>'
      );
    });
  });
}

// menampilkan semua menu saat load pertama kali
tampilkanSemuaMenu();

// menampilkan menu sesuai kategori
$(".nav-link").on("click", function () { // ketika salah satu nav-link diklik
  $(".nav-link").removeClass("active"); // menghilangkan class active pada semua nav-link
  $(this).addClass("active"); // menambahkan class active pada nav-link yang diklik

  // mengubah nama judul (h1)
  let kategori = $(this).html(); // mengambil isi html nav-link (nama kategori)
  $("h1").html(kategori); // mengganti isi html element h1 dengan kategori

  // jika kategori All Menu
  if (kategori == "All Menu") {
    $("#daftar-menu").html(""); // mengosongkan isi daftar menu ("")
    tampilkanSemuaMenu(); // menampilkan semua menu
    return;
  }

  // sesuai kategori
  $.getJSON("data/pizza.json", function (data) {
    let menu = data.menu;
    let content = ""; // menyiapkan wadah content

    $.each(menu, function (i, data) {
      if (data.kategori == kategori.toLowerCase()) { // mengubah nama katergori menjadi huruf kecil dan membandingkannya
        content +=
          '<div class="col-md-4"><div class="card mb-3"><img src="img/menu/' +
          data.gambar +
          '" class="card-img-top" alt="..."><div class="card-body"><h5 class="card-title">' +
          data.nama +
          '</h5><p class="card-text">' +
          data.deskripsi +
          '</p><h5 class="card-title">Rp. ' +
          data.harga +
          '</h5><a href="#" class="btn btn-primary">Pesan Sekarang</a></div></div></div>';
      }
    });

    $("#daftar-menu").html(content);
  });
});
