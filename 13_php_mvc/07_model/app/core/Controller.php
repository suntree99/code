<?php 

class Controller {
  public function view($view, $data = [])
  {
    require_once '../app/views/' . $view . '.php';
  }

  public function model($model) // membuat method model()
  {
    require_once '../app/models/' . $model . '.php'; // merequire file
    return new $model; // instansiasi karena file merupakan Class yang memiliki method
  }
}
