<?php
// membuat class Karyawan extends Controller

class Karyawan extends Controller {
    public function index()
    {
        $data['judul'] = 'Daftar Karyawan';
        $data['kry'] = $this->model('Karyawan_model')->getAllKaryawan();

        $this->view('templates/header', $data);
        $this->view('karyawan/index', $data); // perhatikan folder yang dituju
        $this->view('templates/footer');
    }
    
    // buat function detail dengan parameter $id
    public function detail($id)
    {
        $data['judul'] = 'Detail Karyawan';
        $data['kry'] = $this->model('Karyawan_model')->getKaryawanById($id);

        $this->view('templates/header', $data);
        $this->view('karyawan/detail', $data); // perhatikan file (detail) yang dituju
        $this->view('templates/footer');
    }
}