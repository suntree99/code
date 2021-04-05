function solution(listInput) {

  current = listInput.head; // inisialisasi node awal
  var count = 0; // inisialisasi perhitungan node
  while (current != null) { // lakukan selama node tidak sama dengan null
    count++; // hitungan ditambah
    current = current.next; // mengganti node ke node berikutnya
  }

  return count; // mengembalikan nilai perhitungan node
}

var list = { // input contoh
  head : {value : "A", 
  next : {value : "B", 
  next : {value : "C", 
  next : {value : "D", 
  next : null }}}},
};

console.log(solution(list)); // menjalankan function solution() dengan input contoh dan menampilkannya di console.log