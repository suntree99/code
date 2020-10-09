<?php 

require_once 'App/Init.php';

// $produk1 = new Komik( "Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);
// $produk2 = new Game( "Uncharted", "Neil Druckmann", "Sony Computer", 250000, 50 );

// $cetakProduk = new CetakInfoProduk();
// $cetakProduk->tambahProduk( $produk1 );
// $cetakProduk->tambahProduk( $produk2 );

// echo $cetakProduk->cetak();

// echo "<hr>";

// new APP\Produk\User();
// new APP\Service\User();

// memberikan alias
use APP\Service\User as ServiceUser;
use APP\Produk\User as ProdukUser;

new ServiceUser();
echo "<br>";
new ProdukUser();
