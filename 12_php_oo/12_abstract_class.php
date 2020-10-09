<?php 

// Abstract Class
// - Sebuah class yang tidak dapat di-instansiasi
// - Kelas 'abstrak'
// - Mendefinisikan interfasce untuk kelas lain yang menjadi turunannya
// - Berperan sebagai 'kerangka dasar' untuk kelas turunannya
// - HARUS memiliki minimal 1 METHOD ABSTRACT
// - Digunakan dalam 'pewarisan' / inheritance untuk 'memaksakan' implementasi method abstrak yang sama untuk semua turunannya

// - Semua kelas turunan, harus mengimplementasikan method abstrak yang ada di kelas abstraknya
// - Kelas abstrak boleh memiliki property / method reguler (public, protected, private)
// - Kelas abstrak boleh memiliki property / method static 

// - Kelas abstrak merepresentasikan ide atau konsep dasar
// - "Composition over Inheritance"
// - Salah satu cara menerapkan Polimorphism
// - Sentralisasi logic
// - Mempermudah pengerjaan tim

abstract class Produk { // abstract class, agar class Produk tidak dapat diinstansiasi
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

  abstract public function getInfoProduk(); // getInfoProduk() diubah menjadi abstract method

  // membuat function getInfo pengganti getInfoProduk yang akan diwariskan
  public function getInfo() {
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
   $str = "Komik | " . $this->getInfo() . " - {$this->jmlHalaman} Halaman."; // mengambil getInfo()
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
    $str = "Game | " . $this->getInfo() . " ~ {$this->waktuMain} Jam."; // mengambil getInfo()
    return $str;
  }  
}

// Object Type
class CetakInfoProduk {
  public $daftarProduk = array(); // membuat array daftarProduk untuk menampung data

  public function tambahProduk ( Produk $produk ) { // function tambahProduk untuk memasukan ke dalam array
    $this->daftarProduk[] = $produk;
  }

  public function cetak() {
    $str = "DAFTAR PRODUK : <br>";

    foreach ( $this->daftarProduk as $p ) {
      $str .= "- {$p->getInfoProduk()} <br>"; // menampilan info produk secara detail
    }

    return $str;
  }
}

$produk1 = new Komik( "Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);
$produk2 = new Game( "Uncharted", "Neil Druckmann", "Sony Computer", 250000, 50 );

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk( $produk1 );
$cetakProduk->tambahProduk( $produk2 );

echo $cetakProduk->cetak();
