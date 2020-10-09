<?php

class Karyawan_model
{
    // mengeset tabel database yang digunakan
    private $table = 'karyawan';
    private $db; // untuk memanggil database

    // membuat construct untuk memanggil database
    public function __construct()
    {
        $this->db = new Database;
    }

    // menyesuaikan code pengambilan data
    public function getAllKaryawan()
    {
        $this->db->query('SELECT * FROM ' . $this->table); // memanggil function query
        return $this->db->resultSet(); // memanggil functin resultSet 
    }

    // membuat function getMahasiswaById
    public function getKaryawanById($id)
    {
        // query data
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        // menggunakan :id untuk menyimpan data yang akan di-binding
        // untuk menghindari sql injection, untuk mengamankan query

        // bind data dengan bind($param, $value)
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    // membuat function tambahDataKaryawan($_POST)
    public function tambahDataKaryawan($data)
    {
        $query = "INSERT INTO karyawan
                    VALUES
                ('', :nama, :nik, :usia, :jenis, :email, :gambar)";

        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('nik', $data['nik']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('usia', $data['usia']);
        $this->db->bind('jenis', $data['jenis']);
        $this->db->bind('gambar', $data['gambar']);

        $this->db->execute();

        return $this->db->rowChange();
    }
}
