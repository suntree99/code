<title>Sintaks PHP</title>

<?php 
// ini adalah komentar, untuk satu baris
/*
ini adalah komentar,
labih dari satu baris
*/

// Pertemuan 2 - PHP Dasar
// Sintaks PHP

// Standar Output
// - echo, print (untuk mencetak tulisan, isi variabel, dll.)
// - print_r (untuk mencetak array)
// - var_dump (untuk melihat isi dari variabel, berguna untuk debuging)

  echo "Budi Darmawan"; echo "<br>";
  print 123; print "<br>";
  print_r("Budi Darmawan"); print_r("<br>");
  var_dump("Budi Darmawan")

?>

<!-- Penulisan Sintaks PHP : -->

<!-- 1. PHP di dalam HTML -->
  <h1>Halo, Selamat Datang <?php echo "Budi"; ?></h1> 

<!-- 2. HTML di dalam PHP -->
  <?php 
    echo "<h1>Halo, Selamat Datang Darmawan</h1>" 
  ?>

<!-- Variabel -->
<?php 
  // variabel tidak diawali angka, tapi boleh mengandung angka, dan tidak boleh ada spasi
  $nama1 = "Budi Darmawan";

  echo "Halo, nama saya $nama1";
  echo "<br>";
  echo 'Halo, nama saya $nama1'; // kutip satu pada PHP tidak sensitif terhadap variabel
  echo "<br>";
?>

<!-- Pemanggilan Variabel -->
  <h1>Halo, Selamat Datang <?php echo $nama1; ?></h1> 
  <p><?php echo "Ini adalah paragraf" ?></p>

<?php 
// Operator

// Aritmatika ( + - * / % )

  $x = 10;
  $y = 20;
  echo $x + $y;

  echo "<br>";

// Penggabung String / Concatination / Concat ( . )

  $nama_depan = "Budi";
  $nama_belakang = "Darmawan";
  echo $nama_depan . " " . $nama_belakang;

  echo "<br>";

// Assignment ( =, +=, -=, *=, /=, %=, .= )

  $z = 1;
  $z += 5;
  echo $z;
  
  echo "<br>";

  $nama = " Budi";
  $nama .= " ";
  $nama .= "Darmawan";

  echo $nama;

  echo "<br>";

// Perbandingan ( <, >, <=, >=, == )

  var_dump( 1 == "1" );

  echo "<br>";

// Identitas ( ===, !== )

  var_dump( 1 === "1" );

  echo "<br>";

// Logika ( &&, ||, ! )

  $x = 30;
  var_dump($x < 20 && $x % 2 == 0);

 ?>
