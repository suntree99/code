function solution(arrInput) {

    var n = arrInput.length; // menghitung jumlah elemen array input
    var arrDekat = []; // membuat array kosong untuk menampung elemen array baru

    for (var i = 0; i < n; i++) { // pengulangan dengan jumlah elemen array input

        if (arrInput[i] == arrInput[i+1]) { // jika elemen yang berdekatan sama
            arrDekat[i] = arrInput[i]; // masukkan nilai elemen array input ke elemen array baru 
        } else { // jika tidak
            arrDekat[i] = undefined; // isi nilai elemen dengan undefined 
        }
    
    }

    var filtered = arrDekat.filter(function (el) { // menghilangan elemen yang undefined
    return el != null; // mengembalikan elemen yang memiliki nilai
    });

    if (filtered[0] == filtered[1]) { // pengondisian untuk mensortir elemen array baru  
        solution(filtered); // memanggil function solution()
    } else { // jika pengondisian selesai
        var hasil = filtered[0]; // menampung nilai elemen hasil 
        console.log(hasil); // tampilkan nilai elemen hasil pada console.log
    }

}

var arr = [-2,-2,-2,9,9,9,-2,7,9]; // input contoh

solution(arr); // menjalankan function solution() dengan input contoh