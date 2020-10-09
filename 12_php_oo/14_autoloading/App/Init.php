<?php 

  // require_once 'Produk/InfoProduk.php';
  // require_once 'Produk/Produk.php';
  // require_once 'Produk/Komik.php';
  // require_once 'Produk/Game.php';
  // require_once 'Produk/CetakInfoProduk.php';

// autoloading
spl_autoload_register(function ( $class ) { // parameternya nama class sehingga nama file harus sama
  require_once __DIR__ . '/Produk/' . $class . '.php';
});
