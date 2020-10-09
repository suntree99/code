// // Ingat Cara Membuat Object

// // Cara 1 - Object Literal
// var obj = {};
// obj.halo = function() {
//  console.log("Halo");
// }
// memanggil
// obj.halo();

// // Cara 2 - Function declaration
// function halo() {
//  console.log("Halo");
// }
// memanggil
// halo();

// // Cara 3 - Constructor Function (keyword : new)
// function Halo() {
//   console.log("Halo");
// }
// memanggil
// new Halo();

// ketiga hal tersebut menampilkan hal yang sama namun konteksnya berbeda.

// _______________________________________________________________________

// // This

// this adalah window pada objek global
// console.log(this);

// var a = 10;
// console.log(window.a);

// // Cara 1 - Object Literal

// var obj = { a : 10, nama : "Budi" };
// var obj = {};
// obj.halo = function() {
// 	console.log(this);
// 	console.log("Halo");
// }

// obj.halo();
// this pada object literal mengembalikan pada objecty yang bersangkutan


// // Cara 2 - Function declaration

// function halo() {
// 	console.log(this);
// 	console.log("Halo");
// }

// this.halo();
// // this pada function declaration mengembalikan pada object global


// // Cara 3 - Constructor Function (keyword : new)

function Halo() {
	console.log(this);
	console.log("Halo");
}

new Halo();

var obj1 = new Halo();
var obj2 = new Halo();
// // this pada constructor function mengembalikan object yang baru dibuat
