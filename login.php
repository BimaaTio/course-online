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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Focus Admin: Widget</title>

    <!-- ================= Favicon ================== -->
    <!-- Standard -->
    <link rel="shortcut icon" href="http://placehold.it/64.png/000/fff">
    <!-- Retina iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="144x144" href="http://placehold.it/144.png/000/fff">
    <!-- Retina iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="114x114" href="http://placehold.it/114.png/000/fff">
    <!-- Standard iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="72x72" href="http://placehold.it/72.png/000/fff">
    <!-- Standard iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="57x57" href="http://placehold.it/57.png/000/fff">

    <!-- Styles -->
    <link href="css/lib/font-awesome.min.css" rel="stylesheet">
    <link href="css/lib/themify-icons.css" rel="stylesheet">
    <link href="css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="css/lib/helper.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>

<body class="bg-warning">

    <div class="unix-login">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="index.html"><span>Focus</span></a>
                        </div>
                        <div class="login-form">
                            <h4>Login</h4>
                            <form>
                                <div class="form-group">
                                    <label>Email address</label>
                                    <input type="email" class="form-control" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control" placeholder="Password">
                                </div>
                                <div class="checkbox">
                                    <label>
										<input type="checkbox"> Remember Me
									</label>
                                    <label class="pull-right">
										<a href="#">Forgotten Password?</a>
									</label>

                                </div>
                                <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Sign in</button>
                                <div class="social-login-content">
                                    <div class="social-button">
                                        <button type="button" class="btn btn-primary bg-facebook btn-flat btn-addon m-b-10"><i class="ti-facebook"></i>Sign in with facebook</button>
                                        <button type="button" class="btn btn-primary bg-twitter btn-flat btn-addon m-t-10"><i class="ti-twitter"></i>Sign in with twitter</button>
                                    </div>
                                </div>
                                <div class="register-link m-t-15 text-center">
                                    <p>Don't have account ? <a href="#"> Sign Up Here</a></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>

