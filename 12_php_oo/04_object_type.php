<?php 

// Object Type

class Produk {
  public $judul,
         $penulis,
         $penerbit,
         $harga;

  // Constructor
  public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0) {
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
  }

  public function getlabel() {
    return "$this->penulis, $this->penerbit";
  }
}

// Object Type
class CetakInfoProduk {
  public function cetak( Produk $produk ) { // 'Produk' berfungsi agar argument hanya boleh diisi class Produk
    $str = "{$produk->judul} | {$produk->getlabel()} (Rp. {$produk->harga})";
    return $str;
  }
}

$produk1 = new Produk( "Naruto", "Masashi Kishimoto", "Shonen Jump", 30000 );
$produk2 = new Produk( "Uncharted", "Neil Druckmann", "Sony Computer", 250000 );

echo "Komik : " . $produk1->getlabel();
echo "<br>";
echo "Game : " . $produk2->getlabel();
echo "<br>";

// Cetak Object Type
$infoProduk1 = new CetakInfoProduk();
echo $infoProduk1->cetak($produk1);
