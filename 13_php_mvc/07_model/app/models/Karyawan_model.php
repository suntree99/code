<?php

class Karyawan_model {

    // input data dari database

    private $dbh; // database handler 
    private $stmt; // statement

    public function __construct()
    {
        $dsn = 'mysql:host=localhost;dbname=phpmvc'; // data source name

        try {
            $this->dbh = new PDO($dsn, 'root', '');
        } catch(PDOException $e) { // jika gagal
            die($e->getMessage()); // kirimkan pesan
        }
    }

    public function getAllKaryawan()
    {
        $this->stmt = $this->dbh->prepare('SELECT * FROM karyawan'); // prepare data dengan query
        $this->stmt->execute(); // eksekusi data
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC); // ambil (fetch) semua data dengan format associative 
    }

    // input data manual
    
    // private $kry = [
    //     [
    //     "nama" => "Andi Kacamata",
    //     "nik" => 202003051,
    //     "usia" => 34,
    //     "email" => "andi_kacamata@ymail.com",
    //     "gambar" => "avatar1.png"
    //     ],
    //     [
    //     "nama" => "Budi Brewok",
    //     "nik" => 202003052,
    //     "usia" => 30,
    //     "email" => "budi_brewok@ymail.com",
    //     "gambar" => "avatar2.png"
    //     ],
    //     [
    //     "nama" => "Chandra Uban",
    //     "nik" => 202003053,
    //     "usia" => 50,
    //     "email" => "chandra_uban@ymail.com",
    //     "gambar" => "avatar3.png"
    //     ],
    //     [
    //     "nama" => "Dita Bule",
    //     "nik" => 202003054,
    //     "usia" => 31,
    //     "email" => "dita_bule@ymail.com",
    //     "gambar" => "avatar4.png"
    //     ],
    //     [
    //     "nama" => "Elin Tomboy",
    //     "nik" => 202003055,
    //     "usia" => 32,
    //     "email" => "elin_tomboy@ymail.com",
    //     "gambar" => "avatar5.png"
    //     ],
    //     [
    //     "nama" => "Fani Sipit",
    //     "nik" => 202003056,
    //     "usia" => 33,
    //     "email" => "fani_sipit@ymail.com",
    //     "gambar" => "avatar6.png"
    //     ],
    //     [
    //     "nama" => "Gugun Kribo",
    //     "nik" => 202003057,
    //     "usia" => 35,
    //     "email" => "gugun_kribo@ymail.com",
    //     "gambar" => "avatar7.png"
    //     ],
    //     [
    //     "nama" => "Hana Kuncir",
    //     "nik" => 202003058,
    //     "usia" => 27,
    //     "email" => "hana_kuncir@ymail.com",
    //     "gambar" => "avatar8.png"
    //     ],
    //     [
    //     "nama" => "Indra Cepak",
    //     "nik" => 202003059,
    //     "usia" => 26,
    //     "email" => "indra_cepak@ymail.com",
    //     "gambar" => "avatar9.png"
    //     ]
    // ];

    // public function getAllKaryawan()
    // {
    //     return $this->kry;
    // }
}