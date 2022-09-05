<?php
session_start();
require 'config/functions.php';

if(isset($_POST['submit'])){
  $email = $_POST['email'];
  $pass = $_POST['pass'];

  $cek = mysqli_query($conn, "SELECT * FROM tb_admin WHERE email = '$email' ");
  if(mysqli_num_rows($cek) === 1) {
      $row = mysqli_fetch_assoc($cek);
      if($row['status'] == 'P'){
        echo "<script>
                  alert('Heyo Mau Login ya!?, GA BOLEH YA ADIK ADIK!!');
                  document.location.href = 'login.php';
            </script>";
      } else if($row['status'] == 'R' ) {
        echo "<script>
                  alert('Heyo Mau Login ya!?, GA BOLEH YA ADIK ADIK!!');
                  document.location.href = 'login.php';
            </script>";
      } else if(password_verify($pass, $row['password'])){
          $_SESSION['login'] = true;
          $_SESSION['uid'] = $row['id_admin'];
          $_SESSION['nama'] = $row['full_name'];
          $_SESSION['uname'] = $row['username'];

          if( isset($_POST['remember']) ){
              setcookie('id', $row['id_adm'], time() + 2500);
              setcookie('key', hash('sha256', $row['nama']), time() + 2500);
          }
          header("Location: admin?=");
          exit;
      }
  }
  $error = true;
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Alignleft | Log in</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="assets/AdminLTE-3.2.0/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="assets/AdminLTE-3.2.0/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/AdminLTE-3.2.0/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="assets/AdminLTE-3.2.0/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  <link rel="stylesheet" href="../../plugins/toastr/toastr.min.css">
  <link rel="stylesheet" href="assets/style.css">
</head>

<body class="hold-transition login-page">
  <div class="login-box">
    <img src="assets/logob.png" alt="" srcset="" class="login-logo logos" width="150" height="60"
      style="text-align: center ;">
    <!-- /.login-logo -->
    <div class="card">
      <div class="card-body login-card-body">
        <?php if(isset($error)) :?>
        <p class="login-box-msg">Email / Password Salah</p>
        <script>
          Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Something went wrong!'
          })
        </script>
        <?php endif; ?>
        <?php if(isset($_GET['msg'])) :?>
          <p class="login-box-msg">Silahkan Login Terlebih Dahulu!!</p>
        <?php endif;?>
        <form action="" method="post">
          <div class="input-group mb-3">
            <input type="email" name="email" class="form-control" placeholder="Email" required>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" name="pass" class="form-control" placeholder="Password" required>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-8">
              <div class="icheck-primary">
                <input type="checkbox" id="remember" name="remember">
                <label for="remember">
                  Ingat Saya
                </label>
              </div>
            </div>
            <!-- /.col -->
            <div class="col-4">
              <button type="submit" name="submit" class="btn btn-primary btn-block">Sign In</button>
            </div>
            <!-- /.col -->
          </div>
        </form>
        <!-- <p class="mb-1">
        <a href="forgot-password.html">I forgot my password</a>
      </p>
      <p class="mb-0">
        <a href="register.html" class="text-center">Register a new membership</a>
      </p> -->
      </div>
      <!-- /.login-card-body -->
    </div>
  </div>
  <!-- /.login-box -->

  <!-- jQuery -->
  <script src="assets/AdminLTE-3.2.0/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="assets/AdminLTE-3.2.0/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="assets/AdminLTE-3.2.0/dist/js/adminlte.min.js"></script>
  <!-- SweetAlert2 -->
  <script src="assets/AdminLTE-3.2.0/plugins/sweetalert2/sweetalert2.min.js"></script>
  <!-- Toastr -->
  <script src="assets/AdminLTE-3.2.0/plugins/toastr/toastr.min.js"></script>


</body>

</html>