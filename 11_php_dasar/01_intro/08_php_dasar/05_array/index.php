<title>Array</title>

<?php 

// array
// variabel yang dapat memiliki banyak nilai
// pasangan nilai dan indeks yang dimuali dari 0

// membuat array versi lama
$hari = array("Senin", "Selasa", "Rabu");

// membuat array versi baru
$bulan = ["Januari", "Februari", "Maret"];

// array boleh memiliki tipe data yang berbeda
$arr = [123, "tulisan", false];

// cara menampilkan array

// print_r
print_r($bulan);

echo "<br>";
echo "<br>";

// var_dump()
var_dump($hari);

echo "<br>";
echo "<br>";

// menampilkan 1 elemen pada array dengan echo dan print
echo $arr[0];

echo "<br>";
echo "<br>";

print $bulan[1];

echo "<br>";
echo "<br>";

// menambahkan elemen pada array
var_dump($hari);

$hari[] = "Kamis";
$hari[] = "Jum'at";

echo "<br>";
echo "<br>";

var_dump($hari);

?>
