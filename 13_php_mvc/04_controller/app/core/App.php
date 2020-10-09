<?php

class App {
  protected $controller = 'Home'; // controller default
  protected $method = 'index'; // method default
  protected $params = []; // parameter

  public function __construct()
  {
    $url = $this->parseURL();
    
    // mengecek controller
    if ( file_exists ('../app/controllers/' . $url[0] . '.php') ) {
      $this->controller = $url[0]; // mengeset controller yang bersangkutan
      unset($url[0]); // untuk meng-unset controller dalam array url[] sehingga tersisa method dan params (jika ada)
    }

    require_once '../app/controllers/' . $this->controller . '.php';
    $this->controller = new $this->controller; // instansiasi class agar bisa memanggil fungsinya

    // mengecek method
    if ( isset ($url[1]) ) {
      if ( method_exists ($this->controller, $url[1]) ) { // object $this->conroller hasil instansiasi
        $this->method = $url[1]; // mengeset method yang bersangkutan
        unset($url[1]); // untuk meng-unset method dalam array url[] sehingga tersisa params (jika ada)
      }
    }

    // mengecek params
    if ( !empty ($url) ) { // jika tidak kosong (ada)
      $this->params = array_values($url); // mengisi array params dengan nilai $url[] yang tersisa
    }

    // jalankan controller & method, serta kirimkan params (jika ada)
    call_user_func_array([$this->controller, $this->method], $this->params);

  }

  public function parseURL()
  {
    if ( isset($_GET['url']) ) {
      $url = rtrim($_GET['url'], '/');
      $url = filter_var($url, FILTER_SANITIZE_URL);
      $url = explode('/', $url);
      return $url;
    }
    else { // tricky gara2 : Trying to access array offset on value of type NULL
      return $url = [$this->controller]; 
    }
  }
}
