// contoh penggunaan promt dan alert
var nama;
nama = prompt("Masukkan Nama :");
alert("Nama yang anda masukkan adalah : " + nama);

// contoh penggunaan confirm dan alert
var tes;
tes = confirm("Kamu yakin ???");
alert(tes === true ? "Anda telah menekan tombol OK" : "Anda telah menekan tombol CANCEL")

alert("Selamat Datang..");
var lagi = true;

while(lagi) {
  var nama = prompt("Masukkan Nama :");
  alert("Hallo " + nama);

  lagi = confirm("Coba Lagi???")
}

alert("Terima Kasih..")
