<?php 

// Constructor

class Produk {
  public $judul,
         $penulis,
         $penerbit,
         $harga;

  // Constructor __construct($argument = $nilaiDefault, ...)
  public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0) {
    $this->judul = $judul; // $this->property = argument
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
  }

  public function getlabel() {
    return "$this->penulis, $this->penerbit";
  }
}

$produk1 = new Produk( "Naruto", "Masashi Kishimoto", "Shonen Jump", 30000 );
$produk2 = new Produk( "Uncharted", "Neil Druckmann", "Sony Computer", 250000 );
$produk3 = new Produk( "Dragon Ball" );

echo "Komik : " . $produk1->getlabel();
echo "<br>";
echo "Game : " . $produk2->getlabel();
echo "<br>";
var_dump($produk3);
