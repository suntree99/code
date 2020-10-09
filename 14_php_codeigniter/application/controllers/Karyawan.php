<?php

class Karyawan extends CI_Controller
{
   // public function _construct()
   // {
   //    parent::__construct(); 
   //    $this->load->database();
   // }
   // membuat function __construct() agar database bisa digunakan di banyak method dalam class ini
   // jika hanya satu method yang menggunakan database, gunakan $this->load->database() pada method tersebut
   // jika banyak controller yang manggunakan database, tidak perlu dibuat disini, panggil database di config/autoload/$autoload['libraries'] = array('database');

   public function __construct()
   {
      parent::__construct(); // untuk menjalankan function __construct() di class parentnya (CI_Controller)
      $this->load->model('Karyawan_model');
      $this->load->library('form_validation');
   }

   public function index()
   {
      $data['judul'] = 'Daftar Karyawan';
      $data['karyawan'] = $this->Karyawan_model->getAllKaryawan();
      if ($this->input->post('keyword')) {
         $data['karyawan'] = $this->Karyawan_model->cariDataKaryawan();
      }
      $this->load->view('templates/header', $data);
      $this->load->view('karyawan/index', $data);
      $this->load->view('templates/footer');
   }

   public function tambah()
   {
      $data['judul'] = 'Form Data Tambah Karyawan';

      $this->form_validation->set_rules('nama', 'Nama', 'required');
      $this->form_validation->set_rules('nik', 'NIK  ', 'required|numeric');
      $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
      $this->form_validation->set_rules('usia', 'Usia', 'required|numeric');
      $this->form_validation->set_rules('gambar', 'Gambar', 'required');

      if ($this->form_validation->run() == FALSE) {
         $this->load->view('templates/header', $data);
         $this->load->view('karyawan/tambah');
         $this->load->view('templates/footer');
      } else {
         $this->Karyawan_model->tambahDataKaryawan();
         $this->session->set_flashdata('flash', 'ditambahkan');
         redirect('karyawan');
      }
   }

   public function hapus($id)
   {
      $this->Karyawan_model->hapusDataKaryawan($id);
      $this->session->set_flashdata('flash', 'dihapus');
      redirect('karyawan');
   }

   public function detail($id)
   {
      $data['judul'] = 'Daftar Data Karyawan';
      $data['karyawan'] = $this->Karyawan_model->getKaryawanById($id);
      $this->load->view('templates/header', $data);
      $this->load->view('karyawan/detail', $data);
      $this->load->view('templates/footer');
   }

   public function ubah($id)
   {
      $data['judul'] = 'Form Ubah Tambah Karyawan';
      $data['karyawan'] = $this->Karyawan_model->getKaryawanById($id);
      $data['jenis'] = ['Laki-laki', 'Perempuan'];

      $this->form_validation->set_rules('nama', 'Nama', 'required');
      $this->form_validation->set_rules('nik', 'NIK  ', 'required|numeric');
      $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
      $this->form_validation->set_rules('usia', 'Usia', 'required|numeric');
      $this->form_validation->set_rules('gambar', 'Gambar', 'required');

      if ($this->form_validation->run() == FALSE) {
         $this->load->view('templates/header', $data);
         $this->load->view('karyawan/ubah', $data);
         $this->load->view('templates/footer');
      } else {
         $this->Karyawan_model->ubahDataKaryawan();
         $this->session->set_flashdata('flash', 'diubah');
         redirect('karyawan');
      }
   }
}
