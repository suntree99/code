<a href="latihan1_pengulangan_array.php">Latihan 1 - Pengulangan Array</a>
<br>
<a href="latihan2_numeric_array.php">Latihan 2 - Numeric Array</a>
<br>
<a href="latihan3_associative_array.php">Latihan 3 - Associative Array</a>
<hr>

<title>Array</title>

<?php 

// Array
// variabel yang dapat memiliki banyak nilai
// pasangan indeks dan nilai (key and value pair) yang dimuali dari index 0

// cara membuat array versi lama
$hari = array("Senin", "Selasa", "Rabu");

// cara membuat array versi baru
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
