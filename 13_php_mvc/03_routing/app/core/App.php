<?php

class App {
  public function __construct()
  {
    $url = $this->parseURL();
    var_dump($url);
  }

  public function parseURL() // untuk memecah url menjadi data yanga akan digunakan
  {
    if ( isset($_GET['url']) ) {
      $url = rtrim($_GET['url'], '/'); // menghilangkan slash (/) di akhir
      $url = filter_var($url, FILTER_SANITIZE_URL); // menghilangkan karakter aneh
      $url = explode('/', $url); // mengubah menjadi array
      return $url;
    }
  }
}
