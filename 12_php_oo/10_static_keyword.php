<?php 

// Static Keyword
// - Member yang terikat dengan class, bukan dengan object
// - Nilai stsatic akan selalu tetap meskipun object di-instansiasi berulang kali
// - Membuat kode menjadi 'prosedural'
// - Biasanya digunakan untuk membuat fungsi bantuan / helper
// - BIasa digunakan di class-class utility pada framework (Code Igniter, laravel, dll.)


class contohStatic {
  public static $angka1 = 1;

  public static function halo() {
    return "Hallo " . self::$angka1++ . " kali"; // self adalah $this pada static class
  }
}

// mengakses property dengan (::)
echo contohStatic::$angka1;

echo "<hr>";

// mengakses method dengan (::)
echo contohStatic::halo();
echo "<br>";
echo contohStatic::halo();
echo "<br>";
echo contohStatic::halo();

echo "<hr>";

// Perbandingan OOP Biasa dengan OOP Static

// OOP Biasa (tanpa ststic, nilai angka2 akan di-reset ketika membuat objek baru)
class ContohOopBiasa {
  public $angka2 = 1;

  public function halo() {
    return "Halo " . $this->angka2++ . " kali <br>";
  }
}

$cob1 = new ContohOopBiasa;
echo $cob1->halo();
echo $cob1->halo();
echo $cob1->halo();

echo "<br>";

$cob2 = new ContohOopBiasa;
echo $cob2->halo();
echo $cob2->halo();
echo $cob2->halo();

echo "<hr>";

// OOP Static (nilai angka3 akan diteruskan walaupun membuat objek baru)
class ContohOopStatic {
  public static $angka3 = 1;

  public function halo() {
    return "Halo " . self::$angka3++ . " kali <br>";
  }
}

$cos1 = new ContohOopStatic;
echo $cos1->halo();
echo $cos1->halo();
echo $cos1->halo();

echo "<br>";

$cos2 = new ContohOopStatic;
echo $cos2->halo();
echo $cos2->halo();
echo $cos2->halo();

?>
