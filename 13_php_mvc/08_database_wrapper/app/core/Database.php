<?php 

class Database {
    private $host = DB_HOST;
    private $user = DB_USER;
    private $pass = DB_PASS;
    private $db_name = DB_NAME;

    // memindahkan dan menyesuaikan konfigurasi databse
    private $dbh;
    private $stmt;
    
    public function __construct()
    {
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->db_name; // data source name

        $option = [
            PDO::ATTR_PERSISTENT => true, // menjaga agar koneksi stabil
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION // jika gagal
        ];

        try {
            $this->dbh = new PDO($dsn, 'root', '');
        } catch(PDOException $e) { // jika gagal
            die($e->getMessage()); // kirimkan pesan
        }
    }

    // membuat function query agar penggunaan database bisa fleksibel
    public function query($query)
    {
        $this->stmt = $this->dbh->prepare($query);
    }

    public function bind($param, $value, $type = null) // untuk menentukan ... secara otomatis
    {
        if ( is_null($type) ) {
            switch( true ) {
                case is_int($value) :
                    $type = PDO::PARAM_INT;
                    break;
                case is_bool($value) :
                    $type = PDO::PARAM_BOOL;
                    break;
                case is_null($value) :
                    $type = PDO::PARAM_NULL;
                    break;
                default :
                    $type = PDO::PARAM_STR;
            }
        }

        $this->stmt->bindValue($param, $value, $type);
    }

    public function execute()
    {
        $this->stmt->execute();
    }

    public function resultSet()
    {
        $this->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function single()
    {
        $this->execute();
        return $this->stmt->fetch(PDO::FETCH_ASSOC);
    }

}