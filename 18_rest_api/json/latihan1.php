<?php 

$mahasiswa = [
    [   
        "nama" => "Budi Darmawan",
        "nim" => 13608051,
        "email" => "suntree99@gmail.com"    
    ],
    [
        "nama" => "Darmawan Budi",
        "nim" => 16908219,
        "email" => "suntree99@ymail.com"
    ]
];

$data = json_encode($mahasiswa);
echo ($data);

?>