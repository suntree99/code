// mengubah object menjadi JSON
// let mahasiswa = {
//     nama : "Budi Darmawan",
//     nim : 13608051,
//     email : "suntree99@ymail.com"
// };
// console.log(JSON.stringify(mahasiswa));

// mengubah JSON menjadi object menggunakan Vanilla Javascript
// let xhr = new XMLHttpRequest();
// xhr.onreadystatechange = function () {
//     if (xhr.readyState == 4 && xhr.status == 200 ) {
//         let mahasiswa = JSON.parse(this.responseText);
//         console.log(mahasiswa);
//     }
// }
// xhr.open('GET', 'coba.json', true);
// xhr.send();

// mengubah JSON menjadi object menggunakan JQuery
$.getJSON('coba.json', function (data) {
    console.log(data);
})