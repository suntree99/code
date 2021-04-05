var arr = [-2,-2,-2,9,9,9,-2,7,9];
var arrInput = arr;

// function berdekatan(arrInput) {

    var n = arrInput.length; // menghitung jumlah elemen array input
    var banyak = [];
    var banyak2 = [];
    var banyak3 = [];

    // for (var i = 0; i < n; i++) {
    //     angka = arrInput[i];
    //     banyak[angka] = 0
    // }
    
    for (var i = 0; i < n; i++) { // pengulangan dengan jumlah elemen array baru

    //     angka = arrInput[i];
    //     banyak[angka] = 

        if (arrInput[i] == arrInput[i+1]) {
            banyak[i] = arrInput[i];
        } else {
            banyak[i] = undefined;
        }
    
        // var j = 0;
        // do {
        //     angka = arrInput[j];
        //     banyak[angka].;
        //     j++;
        // }
        // while ((arrInput[j] == arrInput[j-1]) && (j < (n)));

    }

    var filtered = banyak.filter(function (el) {
    return el != null;
    });

    if (filtered[0] == filtered[1]) {

        m = filtered.length;
    
        for (var i = 0; i < m; i++) { // pengulangan dengan jumlah elemen array baru
    
            if (filtered[i] == filtered[i+1]) {
                banyak2[i] = filtered[i];
            } else {
                banyak2[i] = undefined;
            }
    
        }
        
        var filtered2 = banyak2.filter(function (el) {
        return el != null;
        });

    }


    // p = banyak2.length;

    // for (var i = 0; i < p; i++) { // pengulangan dengan jumlah elemen array baru

    //     if (banyak2[i] == banyak2[i+1]) {
    //         banyak3[i] = 1;
    //     } else {
    //         banyak2[i] = undefined;
    //     }

    // }

// }
    
console.log(filtered2); // tampilkan nilai elemen array

// berdekatan(arr);