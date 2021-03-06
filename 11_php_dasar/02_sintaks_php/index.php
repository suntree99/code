<title>Sintaks PHP</title>

<?php // Tag PHP ini harus dibuat sebelum menulis sintaks PHP

  // ini adalah komentar, untuk satu baris
  /*
  ini adalah komentar,
  untuk satu blok
  */

  // Pertemuan 2 - PHP Dasar
  // Sintaks PHP

  // Standar Output
  // - echo, print (untuk mencetak tulisan, isi variabel, dll.)
  // - print_r() (untuk mencetak array - juga untuk debuging)
  // - var_dump() (untuk melihat isi dari variabel - untuk debuging)

  echo "Budi Darmawan"; echo "<br>";
  print 123; print "<br>";
  print_r("Budi Darmawan"); print_r("<br>");
  var_dump("Budi Darmawan");

?>

<!-- Penulisan Sintaks PHP : -->

<!-- 1. PHP di dalam HTML -->
<h1>Halo, Selamat Datang <?php echo "Budi"; ?></h1> 

<!-- 2. HTML di dalam PHP -->
<?php 
  echo "<h1>Halo, Selamat Datang Darmawan</h1>" 
?>

<!-- Variabel dan Tipe Data -->
<!-- Variabel -->
<?php 
  // variabel diawali dolar ($), tidak boleh diawali angka, tidak boleh ada spasi
  $nama1 = "Budi Darmawan";

  echo "Halo, nama saya $nama1";
  
    echo "<br><br>";

  echo 'Halo, nama saya $nama1'; // kutip satu tidak sensitif terhadap variabel

?>

<!-- pemanggilan variabel -->
<h1>Halo, Selamat Datang <?php echo $nama1; ?></h1> 
<p><?php echo "Ini adalah paragraf" ?></p>

<?php 
// Operator

// Aritmatika ( + - * / % )

  $x = 10;
  $y = 20;
  echo $x + $y;

    echo "<br><br>";

// Penggabung String / concatination / concat ( . )

  $nama_depan = "Budi";
  $nama_belakang = "Darmawan";
  echo $nama_depan . " " . $nama_belakang;

    echo "<br><br>";

// Assignment ( =, +=, -+, *=, /=, %=, .= )

  $z = 1;
  $z += 5;
  echo $z;
  
    echo "<br><br>";

  $nama = " Budi";
  $nama .= " ";
  $nama .= "Darmawan";

  echo $nama;

    echo "<br><br>";

// Perbandingan ( <, >, <=, >=, ==, != ) - mengecek nilai

  var_dump( 1 == "1" );

    echo "<br>";

// Identitas ( ===, !== ) - mengecek nilai dan tipe data

  var_dump( 1 === "1" );

    echo "<br>";

// Logika ( &&, ||, ! )

  $x = 30;
  var_dump($x < 20 && $x % 2 == 0);

?>