<?php 

// koneksi ke database
$connectDB = mysqli_connect("localhost", "root", "", "phpdev");

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