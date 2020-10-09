<?php

// Inheritance
// - Menciptakan hierarki antar kelas (parent & child)
// - Child Class, mewarisi semua property dan method dari parent-nya (yang visible)
// - Child Class, memperluas (extend) fungsionalitas dari pasrent-nya

class Produk {
  public $judul,
         $penulis,
         $penerbit,
         $harga,
         $jmlHalaman,
         $waktuMain;

  // Constructor
  public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0 ) {
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
    $this->jmlHalaman = $jmlHalaman;
    $this->waktuMain = $waktuMain;
  }

  public function getlabel() {
    return "$this->penulis, $this->penerbit";
  }

  public function getInfoProduk() { // digunakan untuk produk selain komik dan game
    $str = "{$this->judul} {$this->getlabel()} (Rp. {$this->harga})";
    return $str;
  }

}

// Inheritance (extend) - mewarisi property dan method dari parentnya
class Komik extends Produk {
   public function getInfoProduk() {
    $str = "Komik | {$this->judul} {$this->getlabel()} (Rp. {$this->harga}) - {$this->jmlHalaman} Halaman.";
    return $str;
   }
}

class Game extends Produk {
   public function getInfoProduk() {
    $str = "Game | {$this->judul} {$this->getlabel()} (Rp. {$this->harga}) ~ {$this->waktuMain} Jam.";
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

$produk1 = new Komik( "Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100, 0 );
$produk2 = new Game( "Uncharted", "Neil Druckmann", "Sony Computer", 250000, 0, 50 );

echo $produk1->getInfoProduk(); // jika tidak ada getInfoProduk pada class Komik maka akan dicari di parentnya
echo "<br>";
echo $produk2->getInfoProduk();
