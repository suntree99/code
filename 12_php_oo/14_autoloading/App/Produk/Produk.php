<?php

abstract class Produk {
  protected $judul,
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
    return $this->judul;
  }
  // Getter
  public function getJudul() {
    return $this->judul;
  }


  // Setter
  public function setPenulis( $penulis ) {
    $this->penulis = $penulis;
    return $this->penulis;
  }
  // Getter
  public function getPenulis() {
    return $this->penulis;
  }


  // Setter
  public function setPenerbit( $penerbit ) {
    $this->penerbit = $penerbit;
    return $this->penerbit;
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
    return $this->harga;
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
