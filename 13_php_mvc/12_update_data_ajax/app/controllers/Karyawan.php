<?php
// membuat class Karyawan extends Controller

class Karyawan extends Controller
{
    public function index()
    {
        $data['judul'] = 'Daftar Karyawan';
        $data['kry'] = $this->model('Karyawan_model')->getAllKaryawan();

        $this->view('templates/header', $data);
        $this->view('karyawan/index', $data); // perhatikan folder yang dituju
        $this->view('templates/footer');
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Karyawan';
        $data['kry'] = $this->model('Karyawan_model')->getKaryawanById($id);

        $this->view('templates/header', $data);
        $this->view('karyawan/detail', $data); // perhatikan file (detail) yang dituju
        $this->view('templates/footer');
    }

    // membuat function tambah
    public function tambah()
    {
        if ($this->model('Karyawan_model')->tambahDataKaryawan($_POST) > 0) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/karyawan');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/karyawan');
            exit;
        }
    }

    // membuat function tambah
    public function hapus($id)
    {
        if ($this->model('Karyawan_model')->hapusDataKaryawan($id) > 0) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/karyawan');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location: ' . BASEURL . '/karyawan');
            exit;
        }
    }

    // membuat function getUbah
    public function getUbah()
    {
        echo json_encode($this->model('Karyawan_model')->getKaryawanById($_POST['id']));
    }

    public function ubah()
    {
        if ($this->model('Karyawan_model')->ubahDataKaryawan($_POST) > 0) {
            Flasher::setFlash('berhasil', 'dibuah', 'success');
            header('Location: ' . BASEURL . '/karyawan');
            exit;
        } else {
            Flasher::setFlash('gagal', 'diubah', 'danger');
            header('Location: ' . BASEURL . '/karyawan');
            exit;
        }
    }
}
