// mengambil element2 yang dibutuhkan untuk ajax
var keyword = document.getElementById("keyword");
var cari = document.getElementById("tombolCari");
var container = document.getElementById("container");

// menambahkan event ketika keyword ditulis
keyword.addEventListener("keyup", function () {
  // keyup berarti saat tombol keyboard dilepas

  // membuat objek ajax
  var xhr = new XMLHttpRequest();

  // mengecek kesiapan ajax
  xhr.onreadystatechange = function () {
    if (xhr.readyState == 4 && xhr.status == 200) {
      // readyState 0,1,2,3,4 - status 404 file not found
      container.innerHTML = xhr.responseText; // menampilan isi respon data ke dalam kontainer
      // console.log(xhr.responseText); // menampilkan isi respon data ke dalam console.log
    }
  };

  // melakukan eksekusi ajax
  xhr.open("GET", "ajax/karyawan.php?keyword=" + keyword.value, true); // untuk membuka data, true untuk asynchronous
  xhr.send(); // untuk mengirimkan data
});
