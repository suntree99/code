<?php 

// Constant atau Konstanta
// Merupakan sebuah identifier untuk menyimpan nilai yang tetap
// Dibuat dengan 2 cara :
// - define()
// - const


// define('VARIABLE', 'Value') - tidak dapat digunakan di dalam class, sebagai konstanta global
define("NAMA", "Budi Darmawan");
echo NAMA;

echo "<br>";

// const - dapat digunakan dalam class
const UMUR = 30;
echo UMUR;

echo "<br>";

// Const di dalam class
class Coba {
  const GENDER = "Pria";
}

echo Coba::GENDER;

echo "<hr>";

// Magic Constant (Constant dalam PHP)

// __LINE__
echo __LINE__; // menampilkan baris sintaks bersangkutan
echo "<br>";

// __FILE__
echo __FILE__; // menampilkan lokasi file bersangkutan
echo "<br>";

// __DIR__
echo __DIR__; // menampilkan lokasi direktori bersangkutan
echo "<br>";

// __FUNCTION__
function cobafunction() {
  return __FUNCTION__; // menampilkan nama function bersangkutan
}
echo cobafunction();
echo "<br>";

// __CLASS__
class CobaClass {
  public $kelas = __CLASS__; // menampilkan nama kelas bersangkutan
}
$obj = new CobaClass;
echo $obj->kelas;
echo "<br>";

// __TRAIT__
// __METHOD__
// __NAMESPACE__

?>
