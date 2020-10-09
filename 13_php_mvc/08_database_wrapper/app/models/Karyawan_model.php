<?php

class Karyawan_model {

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

}