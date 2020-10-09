var penumpang = [];
var tambahPenumpang = function(namaPenumpang, penumpang) {
  // jika angkot kososng
  if( penumpang.length == 0 ) {
    // tambah penumpang di awal array
    penumpang.push(namaPenumpang);
    // kembalikan isi array & keluar dari function
    return penumpang;
  } else {
    // telusuri seluruh kursi dari awal
    for( var i = 0; i < penumpang.length; i++ ) {
      // jika ada kursi kosong
      if( penumpang[i] == undefined ) {
        // tambah penumpang di kursi tersebut
        penumpang[i] = namaPenumpang;
        // kembalikan isi array & keluar dari function
        return penumpang;
      }
      // jika sudah ada nama yang sama
      else if ( penumpang[i] == namaPenumpang ) {
        // tampilkan pesan kesalahan
        console.log("Penumpang dengan nama " + namaPenumpang + " sudah ada di dalam Angkot!");
        // kembalikan isi array & keluar dari function
        return penumpang;
      }
      // jika kursi sudah terisi
      else if ( i == penumpang.length - 1) {
        // tambahkan penumpang di akhir array
        penumpang.push(namaPenumpang);
        // kembalikan isi array & keluar dari function
        return penumpang;
      }
    }
  } 
}

var hapusPenumpang = function(namaPenumpang, penumpang) {
  // jika angkot kosong
  if( penumpang.length == 0 ) {
    // tampilkan pesan angkot masih kosong, dan
    console.log("Angkot masih kosong!");
    // kembalikan isi array & keluar dari function
    return penumpang;
  } else {
    // telusuri seluruh kursi dari awal
    for( var i = 0; i < penumpang.length; i++ ) {
      // jika nama penumpang sesuai / ada di dalam angkot
      if( penumpang[i] == namaPenumpang) {
        // hapus penumpang ganti menjadi undefined 
        penumpang[i] = undefined;
        // kembalikan isi array & keluar dari function
        return penumpang;
      }
      //jika tidak ada nama penumpang yang sesuai / tidak ada di dalam angkot
      else if ( i == penumpang.length - 1) {
        // tampilkan pesan kesalahan
        console.log(namaPenumpang + " tidak ada di dalam angkot!");
        // kembalikan isi array & keluar dari function
        return penumpang;
      }
    }
  }
}
