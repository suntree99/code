<?php

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
$dbh = new PDO('mysql:host=localhost;dbname=phpdasar', 'root', '',);
$db = $dbh->prepare('SELECT * FROM karyawan');
$db->execute();

$karyawan = $db->fetchAll(PDO::FETCH_ASSOC);

$data = json_encode($karyawan);
echo ($data);

?>