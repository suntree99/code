<?php 

// menghubungkan dengan perintah dari file functions.php
require 'functions.php';

// menangkap $_GET dari halaman index.php
$id = $_GET["id"];

// mengecek apakah data berhasil dihapus atau tidak
if ( hapus($id) > 0 ) {
  echo "
  <script>
    alert('Data BERHASIL dihapus');
    document.location.href = 'index.php';
  </script>";
} else {
  echo "
  <script>
    alert('Data GAGAL dihapus');
    document.location.href = 'index.php';
  </script>";

}

?>