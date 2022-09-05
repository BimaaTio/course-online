<?php
// Koneksi 

define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('DBNAME', 'online_course');

$conn = mysqli_connect(HOST, USER, PASS, DBNAME);
// end koneksi

// Query
function query($query) {
  global $conn;

  $result = mysqli_query($conn, $query);
  $rows = [];

  while($row = mysqli_fetch_assoc($result)){
      $rows[] = $row;
  }

  return $rows;
}
// end Query

// Register
function register($data) {
  global $conn;
  // Ambil data dari form POST register[]
  $nama = ucwords(htmlspecialchars(stripslashes($_POST['fullName'])));
  $uname = ucwords(htmlspecialchars(stripslashes($_POST['username'])));
  $email = htmlspecialchars(stripslashes($data['email']));
  $pass1 = mysqli_real_escape_string($conn, $data['pass']);
  $pass2 = mysqli_real_escape_string($conn, $data['pass2']);
  $status = 'P';
  $ip = $_SERVER['REMOTE_ADDR'];
  

  // Cek Username sudah ad / belum
  $cek_uname = mysqli_query($conn, "SELECT email FROM tb_admin WHERE email = '$email'");
  if( mysqli_fetch_assoc($cek_uname)  ) {
      echo "
          <script>
          alert('Email Sudah ada!, Silahkan Gunakan Email lain')
          </script>";
      return false;
  }

  // Konfirmasi Password cocok / tidak cocok
  if( $pass1 !== $pass2 ) {
      echo "<script>
              alert('Konfirmasi Password tidak sesuai')
            </script>";
      return false;
  }

  // Proses encrypt password / pengacakan password
  $password = password_hash($pass1, PASSWORD_BCRYPT);

  // Proses insert data ke database
  mysqli_query($conn, "INSERT INTO tb_admin VALUES (NULL, '$nama', '$email', '$uname' , '$password', '$status', '$ip') ");

  return mysqli_affected_rows($conn); 
}
// end Register




