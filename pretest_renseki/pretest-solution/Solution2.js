function solution(arrInput) {

    var n = arrInput.length; // menghitung jumlah elemen array input

    
    if ( n%2 == 0 ) { // jika jumlah elemen array input adalah GENAP
        
        var h = (n/2); // jumlah elemen array baru adalah setengah dari jumlah elemen array input
        var arrBaru = []; // membuat array kosong untuk menampung elemen array baru

        for (var i = 0; i < h; i++) { // pengulangan dengan jumlah elemen array baru
            arrBaru[i] = (arrInput[i]+arrInput[n-1-i]) % 10; // mengisi elemen array baru dengan modulus 10
        }
            
    } else { // jika jumlah elemen array input adalah GANJIL
        
        var h = Math.floor(n/2); // mengambil setengah dari jumlah elemen array input dengan pembulatan ke bawah 
        var arrBaru = []; // membuat array kosong untuk menampung elemen array baru

        for (var i = 0; i < h; i++) { // pengulangan dengan jumlah elemen array baru
            arrBaru[i] = (arrInput[i]+arrInput[n-1-i]) % 10; // mengisi elemen array baru dengan modulus 10
        }

        arrBaru[h] = arrInput[h]; // mengisi elemen akhir array baru dengan elemen tengah array input
    }
    
    if (arrBaru.length > 1) { // jika jumlah elemen baru lebih dari 1
        solution(arrBaru); // memanggil function solution()
    } else {
        var hasil = arrBaru[0]; // menampung nilai elemen terakhir 
        console.log(hasil); // menampilkan nilai elemen hasil pada console.log
    }
}

var arr = [0,5,3,2,-1,6]; // input contoh

solution(arr); // menjalankan function solution() dengan input contoh