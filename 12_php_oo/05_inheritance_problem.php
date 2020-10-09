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
         $waktuMain,
         $tipe;

  // Constructor
  public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0, $tipe ) {
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
    $this->jmlHalaman = $jmlHalaman;
    $this->waktuMain = $waktuMain;
    $this->tipe = $tipe;
  }

  public function getlabel() {
    return "$this->penulis, $this->penerbit";
  }

  // Inheritance Problem (harus membuat if else sebanyak property yang berbeda)
  public function getInfoProduk() {
    $str = "{$this->tipe} | {$this->judul} {$this->getlabel()} (Rp. {$this->harga})";
    // percabangan di jenis produk (komik dan game)
    if (  $this->tipe == "Komik" ) {
      $str .= " - {$this->jmlHalaman} Halaman."; // mencetak jumlah halaman dengan string Halaman
    } else {
      $str .= " ~ {$this->waktuMain} Jam."; // mencetak jumlah am dengan string Jam
    }
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

$produk1 = new Produk( "Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100, 0, "Komik" );
$produk2 = new Produk( "Uncharted", "Neil Druckmann", "Sony Computer", 250000, 0, 50, "Game" );

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
