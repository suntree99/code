<?php 

class Home extends Controller { // extends Class Controller agar bisa memanggil method view()
  public function index()
  {
    $data['judul'] = 'Home';
    // memanggil function view (dari Class Controller)
    $this->view('templates/header', $data); // merequire file ../app/views/(tempate/header).php dengan parameter $data
    $this->view('home/index'); // merequire file ../app/views/(home/index).php
    $this->view('templates/footer'); // merequire file ../app/views/(template/footer).php
  }

}
