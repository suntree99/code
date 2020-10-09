<?php 

// Property
// - Merepresentasikan data / keadaan dari sebuah object
// - Merupakan Variable yang ada di dalam object (member variable)
// - Sama seperti variable di dalam PHP, ditambah dengan VISIBILITY (cth: public) di depannya

// Method
// - Merepresentasikan perilaku dari sebuah object
// - Merupakan Function yanga da di dalam object
// - Sama seperti function di dalam PHP, ditambah dengan VISIBILITY (cth: public) di depannya

class Produk {
  // Property
  public $judul = "judul",
         $penulis = "penulis",
         $penerbit = "penerbit",
         $harga = 0;

  // Method
  public function getlabel() {
    return "$this->penulis, $this->penerbit"; // tambahkan $this agar variabel dapat dipahami diluar scope
  }
}

// $produk1 = new Produk();
// $produk1->judul = "Naruto";

// var_dump($produk1);

// $produk2 = new Produk();
// $produk2->judul = "Uncharted";
// $produk2->propertyBaru = "Coba"; // menambah property baru

// var_dump($produk2);

$produk3 = new Produk(); // contoh produk komik
$produk3->judul = "Naruto";
$produk3->penulis = "Masashi Kishimoto";
$produk3->penerbit = "Shonen Jump";
$produk3->harga= 30000;

$produk4 = new Produk(); // contoh produk game
$produk4->judul = "Uncharted";
$produk4->penulis = "Neil Druckmann";
$produk4->penerbit = "Sony Computer";
$produk4->harga= 250000;


echo "Komik : " . $produk3->getlabel();
echo "<br>";
echo "Game : " . $produk4->getlabel();
