<?php 

// koneksi ke database
$connectDB = mysqli_connect("localhost", "root", "", "phpdasar");

// function query - mempersingkat perintah query
function query($query) {
  global $connectDB;
  $result = mysqli_query($connectDB, $query);
  $rows = [];
  while ( $row = mysqli_fetch_assoc($result) ) {
    $rows[] = $row;
  }
  return $rows;
}

// function tambah
function tambah($data) {
  global $connectDB;
  $nama = htmlspecialchars($data["nama"]);
  $nik = htmlspecialchars($data["nik"]);
  $usia = htmlspecialchars($data["usia"]);
  $email = htmlspecialchars($data["email"]);

  // menjalankan function upload
  $gambar = upload(); // jika benar menghasilkan/mengembalikan nama file
  if ( !$gambar ) {
    return false; // jika tidak ada gambar valid yang diupload maka mengembalikan nilai false
  }

  // query insert data
  $query = "INSERT INTO Karyawan VALUES
            ('', '$nama', '$nik', '$usia', '$email', '$gambar')";

  mysqli_query($connectDB, $query);

  return mysqli_affected_rows($connectDB);
}

// function upload
function upload() { // file gambar dikelola oleh $_FILES berupa array multi-dimensi
  $namaFile = $_FILES["gambar"]["name"];
  $tmpName = $_FILES["gambar"]["tmp_name"];

  // mengecek apakah tidak ada gambar yang dimasukkan
  $error = $_FILES["gambar"]["error"];

  if ( $error === 4 ) {
    echo "<script> 
            alert('Pilih gambar terlebih dahulu!');
          </script>";
    return false;
  }

  // mengecek apakah yang diupload adalah gambar
  $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
  $arrayTextGambar = explode('.', $namaFile);
  $ekstensiGambar = strtolower(end($arrayTextGambar));

  if ( !in_array($ekstensiGambar, $ekstensiGambarValid) ) {
    echo "<script> 
            alert('Yang anda upload bukan gambar yang valid!');
          </script>";
    return false;
  } 

  // mengecek jika ukurannya terlalu besar
  $ukuranFile = $_FILES["gambar"]["size"];

  if ( $ukuranFile > 1000000 ) { // ukuran dalam byte (1000000 byte = 1 MB)
    echo "<script> 
            alert('Ukurna gambar terlalu besar!');
          </script>";
    return false;
  }

  // lolos pengecekan, gambar siap diupload
  // generate nama gambar baru, agar tidak ada nama file yang sama
  $namaFileBaru = uniqid(); // menghasilkan string unik (alfanumberik)
  $namaFileBaru .= '.'; // konkatenasi dengan dot (.)
  $namaFileBaru .= $ekstensiGambar; // konkatenasi dengan ekstensi gambar
  move_uploaded_file($tmpName, 'img/' . $namaFileBaru);

  return $namaFileBaru;
}

// function hapus
function hapus($id) {
  global $connectDB;

  mysqli_query($connectDB, "DELETE FROM karyawan WHERE id = $id");

  return mysqli_affected_rows($connectDB);
}

// function ubah
function ubah($data) {
  global $connectDB;
  $id = $data["id"];
  $nama = htmlspecialchars($data["nama"]);
  $nik = htmlspecialchars($data["nik"]);
  $usia = htmlspecialchars($data["usia"]);
  $email = htmlspecialchars($data["email"]);
  $gambarLama = htmlspecialchars($data["gambarLama"]);

  // mengecek apakah user mengambil gambar baru atau tidak
  if ($_FILES['gambar']['error'] === 4 ) {
    $gambar = $gambarLama;
  } else {
    $gambar = upload();
  }

  // query upadate data
  $query = "UPDATE Karyawan SET
            nama = '$nama',
            nik = '$nik',
            usia = '$usia',
            email = '$email',
            gambar = '$gambar'
            WHERE
            id = $id
           ";

  mysqli_query($connectDB, $query);

  return mysqli_affected_rows($connectDB);
}

// function cari
function cari($keyword) {
  $query = "SELECT * FROM karyawan WHERE
            nama LIKE '%$keyword%' OR
            nik LIKE '%$keyword%' OR
            usia LIKE '%$keyword%' OR
            email LIKE '%$keyword%'
           ";

  return query($query);
}

?>