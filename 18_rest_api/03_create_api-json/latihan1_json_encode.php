<?php

// json_encode() digunakan untuk mengubah array associative atau object menjadi JSON

// membuat data manual
// $mahasiswa = [
//     [   
//         "nama" => "Budi Darmawan",
//         "nim" => 13608051,
//         "email" => "suntree99@gmail.com"    
//     ],
//     [
//         "nama" => "Darmawan Budi",
//         "nim" => 16908219,
//         "email" => "suntree99@ymail.com"
//     ]
// ];
//
// $data = json_encode($mahasiswa);
// echo ($data);


// mengambil data dari database
$dbh = new PDO('mysql:host=localhost;dbname=phpdasar', 'root', '',); // Database handler, settingan untuk koneksi ke database menggunakan PDO
$db = $dbh->prepare('SELECT * FROM karyawan'); // menyiapkan data menggunakan fungsi prepare()
$db->execute(); // menjalankan query diatas

$karyawan = $db->fetchAll(PDO::FETCH_ASSOC); // mengambil data dalam bentuk array asosiatif

$data = json_encode($karyawan); // mengubah data menjadi JSON
echo ($data); // menampilkan data

?>