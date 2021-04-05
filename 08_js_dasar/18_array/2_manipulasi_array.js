// Manipulasi Array

// 1. Menambah isi array (manual)
var orang = [];
orang[0] = "Budi";
orang[1] = "Darmawan";
orang[2] = "Ganteng"
// array yang terlewat akan berisi kosong
orang[5] = "Sekali"

console.log(orang);

// 2. Menghapus isi array (manual)
orang[2] = undefined;

console.log(orang);

// 3. Menampilkan isi array

// * .length
var arr = ["Budi", "Iwan", "Wati", "Santi"]
console.log(arr.length);

for ( i = 0; i < arr.length; i++) {
  console.log("Mahasiswa ke-" + (i+1) + " : " + arr[i]);
}

// * .join
var arr = ["Budi", "Iwan", "Wati", "Santi"]
console.log(arr.join()); // koma (,) adalah separator defaultnya
console.log(arr.join(" - "));

// * .push (menambah elemen di akhir)
arr.push("Dina", "Fitri");
console.log(arr.join(" - "));

// * .pop (menghapus elemen terakhir) dihapus satu persatu
arr.pop();
arr.pop();
console.log(arr.join(" - "));

// * unshift (menambah elemen di awal)
arr.unshift("Doddy");
console.log(arr.join(" - "));

// * shift (menghapus elemen awal)
arr.shift();

console.log(arr.join(" - "));

// * splice (menyisipkan)
// splice(indexAwalPenyisipan, mauDihapusBerapa, elemenBaru1, elemenBaru2, ...);
arr.splice(2, 0, "Doddy");
console.log(arr.join(" - "));

arr.splice(1, 2, "Dani", "Fitri");
console.log(arr.join(" - "));

// * slice (memotong)
// slice(indexAwal, batasIndexAkhir); // batasIndexAkhir tidak termasuk array yang baru
arr2 = arr.slice(1, 4);
console.log(arr2.join(" - "));
console.log(arr.join(" - "));

// * forEach(function())
var angka = [1,2,3,4,5,6,7,8];
// for (var i = 0; i < angka.length; i++) {
//   console.log(angka[i]);
// }

angka.forEach(function(e){ // e adalah elemen
  console.log(e);
});

arr.forEach(function(e, i) { // i adalah index
  console.log("Mahasiswa ke-" + (i+1) + " adalah: " + e);
})

// * map(function()) (memetakan array)
var angka2 = angka.map(function(e) {
  return e * 2; 
});

console.log(angka2.join(" - "));

// * Sort (mengurutkan berdasarkan angka depan)
var angka = [1,2,5,10,20,4,3,6,8,7];

angka.sort();
console.log(angka.join(" - "));

angka.sort(function(a,b) { // function(a,b) digunakan untuk mengurutkan dengan benar
  return a-b; // a-b untuk mengurutkan dari terkecil-terbesar 
});
console.log(angka.join(" - "));

// * find(function()) (mencari satu nilai)

var angka3 = angka.find(function(x) {
  return x > 5; // mencari satu nilai > 5
});
console.log(angka3);

// * filter (bisa mengembalikan banyak nilai -> dalam bentuk array)
var angka3 = angka.filter(function(x) {
  return x > 5;
});
console.log(angka3);

var angka3 = angka.filter(function(x) { // angka yang tidak ada mengembalikan array kosong
  return x == 9;
});
console.log(angka3);

var angka3 = angka.filter(function(x) {
  return x > 5;
});
console.log(angka3.join(" - "));

// http://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Array
