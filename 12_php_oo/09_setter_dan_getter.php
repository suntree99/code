<?php

// Setter & Getter (Accessors Method)

// Setter (Celah untuk mengubah property dari luar) - untuk mengeSET
// Getter (Celah untuk mengakses property dari luar) - untuk mengambil (GET)

//  Contoh pemberian ketentuan pada Setter
//   public function setJudul( $judul ) {
//     if ( !is_string($judul) ) {
//       throw new Exception ("Judul harus string");
//     }
//     $this->judul = $judul;
//     return $this->judul;
//   }


class Produk {
  private $judul,
          $penulis,
          $penerbit,
          $harga,
          $diskon = 0; // hanya dapat diakses di class produk;

  // Constructor
  public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0 ) {
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
  }

  // Setter
  public function setJudul( $judul ) {
    $this->judul = $judul;
    // salah satu fungsi Setter dapat ditambahkan Exception
    // if( !isString($judul) ) {
    //   throw new Exception("Judul harus string"); // jika argumentnya bukan string maka akan tampil pesan
    // }
  }
  // Getter
  public function getJudul() {
    return $this->judul;
  }


  // Setter
  public function setPenulis( $penulis ) {
    $this->penulis = $penulis;
  }
  // Getter
  public function getPenulis() {
    return $this->penulis;
  }


  // Setter
  public function setPenerbit( $penerbit ) {
    $this->penerbit = $penerbit;
  }
  // Getter
  public function getPenerbit() {
    return $this->penerbit;
  }


  // Setter
  public function setDiskon ( $diskon ) {
    $this->diskon = $diskon;
  }
  // Getter
  public function getDiskon() {
    return $this->diskon;
  }

  
  // Setter
  public function setHarga( $harga ) {
    $this->harga = $harga;
  }
  // Getter
    public function getHarga() {
    return $this->harga - ( $this->harga * $this->diskon / 100 );
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

$produk2->setDiskon(0);
echo $produk2->getHarga();

echo "<hr>";

$produk1->setJudul("Judul Komik Baru");
echo $produk1->getJudul();
echo "<br>";

$produk1->setPenulis("Penulis Komik Baru");
echo $produk1->getPenulis();
echo "<br>";

$produk1->setPenerbit("Penerbit Komik Baru");
echo $produk1->getPenerbit();
echo "<br>";

$produk1->setHarga(50000);
echo $produk1->getHarga();
echo "<br>";

$produk1->setDiskon(50);
echo $produk1->getDiskon();
echo "<br>";

echo $produk1->getHarga();

echo "<hr>";

$produk2->setJudul("Judul Game Baru");
echo $produk2->getJudul();
echo "<br>";

$produk2->setPenulis("Penulis Game Baru");
echo $produk2->getPenulis();
echo "<br>";

$produk2->setPenerbit("Penerbit Game Baru");
echo $produk2->getPenerbit();
echo "<br>";

$produk2->setHarga(500000);
echo $produk2->getHarga();
echo "<br>";

$produk2->setDiskon(20);
echo $produk2->getDiskon();
echo "<br>";

echo $produk2->getHarga();
