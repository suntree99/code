<?php 

class Controller {
  public function view($view, $data = []) // membuat method view()
  {
    require_once '../app/views/' . $view . '.php'; // merequire file
  }
}
