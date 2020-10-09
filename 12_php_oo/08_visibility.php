<?php

// Visibility (Akses Modifier)
// - Konsep yang digunakan untuk mengatur akses terhadap property dan method pada sebuah objek
// - Ada 3 keyword visibility : public, protected, dan private
//   - public, dapat digunakan di mana saja, bahkan di luar kelas
//   - protected, hanya dapat digunakan di dalam sebuah kelas beserta turunannya
//   - private, hanya dapat digunakan di dalam sebuah kelas tertentu saja

class Produk {
  public $judul,
         $penulis,
         $penerbit;

  protected $diskon = 0; // dapat diakses di child class Game, nilai default untuk child (Komik) yang tidak mengakses $diskon

  private $harga; // hanya dapat diakses di class Produk

  // Constructor
  public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0 ) {
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
  }

  // Untuk mengakses harga saat visibility private
  public function getHarga() {
    return $this->harga - ( $this->harga * $this->diskon / 100 ); // nilai default $diskon = 0
  }

  public function getlabel() {
    return "$this->penulis, $this->penerbit";
  }

  public function getInfoProduk() {
    $str = "{$this->judul} {$this->getlabel()} (Rp. {$this->harga})";
    return $str;
  }

}

// Overriding - menggunakan static method (::) untuk mengambil method parent-nya
class Komik extends Produk {
  
  public $jmlHalaman;

  public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0 ) {
    parent::__construct( $judul, $penulis, $penerbit, $harga );
    $this->jmlHalaman = $jmlHalaman;
  }

  public function getInfoProduk() {
   $str = "Komik | " . parent::getInfoProduk() . " - {$this->jmlHalaman} Halaman.";
    return $str;
  }
}

class Game extends Produk {

  public $waktuMain;

  public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0 ) {
    parent::__construct( $judul, $penulis, $penerbit, $harga );
    $this->waktuMain = $waktuMain;
  }

  // membuat function diskon dengan menggunakan $diskon dari parent-nya
  public function setDiskon ( $diskon ) {
    $this->diskon = $diskon;
  }

  public function getInfoProduk() {
    $str = "Game | " . parent::getInfoProduk() . " ~ {$this->waktuMain} Jam.";
    return $str;
  }  
}

// Object Type
// class CetakInfoProduk {
//   public function cetak( Produk $produk ) {
//     $str = "{$produk->judul} | {$produk->getlabel()} (Rp. {$produk->harga})";
//     return $str;
//   }
// }

$produk1 = new Komik( "Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);
$produk2 = new Game( "Uncharted", "Neil Druckmann", "Sony Computer", 250000, 50 );

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
echo "<hr>";

$produk2->setDiskon(50);
echo $produk2->getHarga();
