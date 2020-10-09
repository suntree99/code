<?php 

// Interface
// - KELAS ABSTRAK yang sama sekali tidak memiliki implementasi
// - MURNI merupakan template untuk kelas turunannya
// - TIDAK BOLEH memiliki property, hanya deklarasi method saja
// - semua method harus dideklarasikan dengan visibility PUBLIC
// - Boleh mendeklarasikan __construct()
// - Satu kelas boleh mengimplementasikan banyak interface (delimiter oleh koma)
// - Dengan menggunakan type-hinting dapat melakukan 'Dependency Injection'
// - Pada akhirnya akan mencapai Polymorphism,

interface InfoProduk { // internface, tidak boleh ada property
  public function getInfoProduk();
}

abstract class Produk {
  protected $judul,
          $penulis,
          $penerbit,
          $harga,
          $diskon = 0; // dapat diakses di class turunannya

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

  abstract public function getInfo();

}

// Overriding - menggunakan static method (::) untuk mengambil method parent-nya
class Komik extends Produk implements InfoProduk { // menambahkan 'implements' untuk mewarisi interface InfoProduk

  public $jmlHalaman;

  public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0 ) {
    parent::__construct( $judul, $penulis, $penerbit, $harga );
    $this->jmlHalaman = $jmlHalaman;
  }

  public function getInfo() {
    $str = "{$this->judul} {$this->getlabel()} (Rp. {$this->harga})";
    return $str;
  }

  public function getInfoProduk() {
   $str = "Komik | " . $this->getInfo() . " - {$this->jmlHalaman} Halaman.";
    return $str;
  }
}

class Game extends Produk implements InfoProduk { // menambahkan 'implements' untuk mewarisi interface InfoProduk

  public $waktuMain;

  public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0 ) {
    parent::__construct( $judul, $penulis, $penerbit, $harga );
    $this->waktuMain = $waktuMain;
  }

  public function getInfo() {
    $str = "{$this->judul} {$this->getlabel()} (Rp. {$this->harga})";
    return $str;
  }

  public function getInfoProduk() {
    $str = "Game | " . $this->getInfo() . " ~ {$this->waktuMain} Jam.";
    return $str;
  }  
}

// Object Type
class CetakInfoProduk {
  public $daftarProduk = array();

  public function tambahProduk ( Produk $produk ) {
    $this->daftarProduk[] = $produk;
  }

  public function cetak() {
    $str = "DAFTAR PRODUK : <br>";

    foreach ( $this->daftarProduk as $p ) {
      $str .= "- {$p->getInfoProduk()} <br>";
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
