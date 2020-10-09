<?php 

class About extends Controller { // extends Class Controller agar bisa memanggil method view()
  public function index( $nama = 'Budi', $pekerjaan = 'Programer', $umur = 30 )
  {
    $data['nama'] = $nama;
    $data['pekerjaan'] = $pekerjaan;
    $data['umur'] = $umur;

    $data['judul'] = 'About Me'; // untuk title halaman

    // memanggil function view (dari Class Controller)
    $this->view('templates/header', $data); // $data yang dipakai adalah ['judul']
    $this->view('about/index', $data); // $data yang dipakai adalah ['nama'], ['umur'], dan ['pekerjaan']
    $this->view('templates/footer');
  }
  public function page()
  {
    $data['judul'] = 'Pages'; // untuk title halaman

    // memanggil function view (dari Class Controller)
    $this->view('templates/header', $data); // $data yang dipakai adalah ['judul']
    $this->view('about/page');
    $this->view('templates/footer');
  }
}
