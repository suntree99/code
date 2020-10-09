<?php

// Overriding

class Produk {
  public $judul,
         $penulis,
         $penerbit,
         $harga;

  // Constructor
  public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0 ) {
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
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
    parent::__construct( $judul, $penulis, $penerbit, $harga ); // mengambil function __construct() parentnya - tanpa disini nilai default agar tidak tertimpa
    $this->jmlHalaman = $jmlHalaman; // memasukan argument item komik
  }

  public function getInfoProduk() {
   $str = "Komik | " . parent::getInfoProduk() . " - {$this->jmlHalaman} Halaman."; // memanggil function getInfoProduk() parentnya dengan method static (::) karena nama method sama agat tidak terjadi looping
    return $str;
  }
}

class Game extends Produk {

  public $waktuMain;

  public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0 ) {
    parent::__construct( $judul, $penulis, $penerbit, $harga );
    $this->waktuMain = $waktuMain;
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
