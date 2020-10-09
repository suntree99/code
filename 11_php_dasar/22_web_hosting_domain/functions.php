<?php 

// koneksi ke database
$connectDB = mysqli_connect("sql310.epizy.com", "epiz_26756019", "CIDzfqQnuqlsEN", "epiz_26756019_phpdasar");

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
  $gambar = upload();
  if ( !$gambar ) {
    return false;
  }

  // query insert data
  $query = "INSERT INTO Karyawan VALUES
            ('', '$nama', '$nik', '$usia', '$email', '$gambar')";

  mysqli_query($connectDB, $query);

  return mysqli_affected_rows($connectDB);
}

// function upload
function upload() {
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

  if ( $ukuranFile > 1000000 ) {
    echo "<script> 
            alert('Ukurna gambar terlalu besar!');
          </script>";
    return false;
  }

  // lolos pengecekan, gambar siap diupload
  // generate nama gambar baru, agar tidak ada nama file yang sama
  $namaFileBaru = uniqid();
  $namaFileBaru .= '.';
  $namaFileBaru .= $ekstensiGambar;
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

  // query update data
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

// function registrasi
function registrasi($data) {
  global $connectDB;
  $username = strtolower(stripslashes($data["username"]));
  $password = mysqli_real_escape_string($connectDB, $data["password"]);
  $password2 = mysqli_real_escape_string($connectDB, $data["password2"]);

  // mengecek username sudah ada atau belum
  $result = mysqli_query($connectDB, "SELECT username FROM user WHERE username = '$username'");

  if ( mysqli_fetch_assoc($result) ) {
    echo "<script> 
          alert('Username sudah dipakai!');
          </script>";
    return false;    
  }

  // mengecek konfirmasi password
  if ( $password !== $password2 ) {
    echo "<script> 
          alert('Konfirmasi password tidak sesuai!');
          </script>";   
    return false;
  }

  // melakukan enkripsi password
  $password = password_hash($password, PASSWORD_DEFAULT);

  // menambahkan user baru ke database
  mysqli_query($connectDB, "INSERT INTO user VALUES('', '$username', '$password')");
  
  return mysqli_affected_rows($connectDB);
}

?>