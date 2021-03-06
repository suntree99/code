<a href="latihan_pengulangan.php">Latihan - Pengulangan</a>
<hr>

<title>Pengulangan</title>

<?php

  // Pengulangan
  // - for
  // - while
  // - do.. while
  // - foreach (pengulangan khusus array - akan dibahas dibagian array)

  // for
  for ($i = 0; $i < 5; $i++) {
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

  // do.. while (dikerjakan minimal satu kali saat false dari awal)
  $i = 0;
  do {
    echo "Hello World! <br>";
    $i++;
  } while ($i < 5);

?>