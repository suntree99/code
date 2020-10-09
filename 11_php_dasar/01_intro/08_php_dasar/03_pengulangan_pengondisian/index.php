<title>Pengulangan dan Pengondisian</title>

<?php 

// Pengulangan
// - for
// - while
// - do.. while
// - foreach (pengulangan khusus array)

// Pengondisian
// - if.. else
// - ie.. else if.. else
// - ternary
// - switch

// for
for ($i=0; $i < 5; $i++) { 
  echo "Hello World! <br>";
}

echo "<br>"; // enter untuk memisahkan tampilan

// while
$i = 0;
while ($i < 5) {
  echo "Hello World! <br>";
$i++;
}

echo "<br>"; // enter untuk memisahkan tampilan

// do.. while (dikerjakan minimal satu kali saat while bernilai false dari awal)
$i = 0;
do {
  echo "Hello World! <br>";
$i++;
} while ( $i < 5);

echo "<br>"; // enter untuk memisahkan tampilan

// if.. else if.. else

$x = 20;
if ( $x < 20 ) {
  echo "benar";
} else if ($x == 20) {
  echo "bingo!";
} else {
  echo "salah";
}

?>