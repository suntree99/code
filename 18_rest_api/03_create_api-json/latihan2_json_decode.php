<?php 

// json_decode() mengubah JSON menjadi object atau array associaive agar bisa digunakan sesuai keperluan

$data = file_get_contents('coba.json'); // mengambil data JSON dari file dengan file_get_contents()
// $data = utf8_encode($data) // mengubah standar encoding dengan utf8_encode()
$mahasiswa = json_decode($data, true); // mengubah string JSON menjadi array associative (true), jika tidak ditulis true maka akan menjadi object

var_dump($data);
echo $mahasiswa[0]["pembimbing"]["pembimbing1"];
