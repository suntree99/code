// mengubah object menjadi JSON menggunakan JSON.stringify()
// let mahasiswa = {
//     nama : "Budi Darmawan",
//     nim : 13608051,
//     email : "suntree99@ymail.com"
// };
// console.log(JSON.stringify(mahasiswa));

// mengubah JSON menjadi object dengan Vanilla Javascript / Javascript murni menggunakan JSON.parse()
// let xhr = new XMLHttpRequest(); // membuat object ajax
// xhr.onreadystatechange = function () {
//     if (xhr.readyState == 4 && xhr.status == 200 ) {
//         let mahasiswa = JSON.parse(this.responseText); // mengubah JSON menjadi object dengan JSON.parse()
//         console.log(mahasiswa);
//     }
// }
// xhr.open('GET', 'coba.json', true); // true -> asynchronous
// xhr.send();

// mengubah JSON menjadi object menggunakan JQuery
$.getJSON("coba.json", function (data) {
  console.log(data);
});
