// var angka = parseInt(prompt("Masukkan angka :"))

// switch (angka) {
//   case 1:
//     alert("Anda memasukkan angka 1")
//     break;
//   case 2:
//     alert("Anda memasukkan angka 2")
//     break;
//   case 3:
//     alert("Anda memasukkan angka 3")
//     break;
//   case 1:
//     alert("Anda memasukkan angka 1")
//     break;
//   default:
//     alert("Angka yang Anda memasukkan salah!")
//     break;
// }

var item = prompt("Masukkan nama makanan/minumah : \n (contoh: nasi, daging, susu, hamburger, softdrink)");

switch (item) {
  case "nasi" :
  case "daging" :
  case "susu" :
    alert("Makanan/minumah SEHAT!");
    break;
  case "hamburger" :
  case "softdrink" :
    alert("Makanan/minumah TIDAK SEHAT!");
    break;
  default :
    alert("Anda memasukkan Makanan/minumah yang salah!");
    break;
}
