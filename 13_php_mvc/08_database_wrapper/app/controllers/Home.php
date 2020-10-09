<?php 

class Home extends Controller {
  public function index()
  {
    $data['judul'] = 'Home';
    $data['nama'] = $this->model('User_model')->getUser(); // menambah property dan memanggil method

    $this->view('templates/header', $data);
    $this->view('home/index', $data); // menambahkan parameter $data untuk variabel nama
    $this->view('templates/footer');
  }
}
