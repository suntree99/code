var angka = prompt("Masukkan angka :");

if(angka < 5) {
  alert(angka + " lebih kecil dari 5");
}

if(angka % 2 == 0) {
  alert(angka + " adalah bilangan GENAP");
}
else {
  alert(angka + " adalah bilangan GANJIL");  
}

// namun jika nilai angka yang di input adalah string maka akan bernilai false (GANJIL),
// dalam kasus ini harus digunakan perintah else if pada bagian selanjutnya
