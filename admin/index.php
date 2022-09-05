<?php 
session_start();

if (!isset($_SESSION["login"])) {
  echo "<script>window.location = '../login.php?msg=login'</script>";
  exit;
}
?>
<!DOCTYPE html>
<html lang="en" class="" style="height: auto;">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Alignleft | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../assets/AdminLTE-3.2.0/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../assets/AdminLTE-3.2.0/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- data table -->
  <!-- DataTables -->
  <link rel="stylesheet" href="../assets/AdminLTE-3.2.0/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../assets/AdminLTE-3.2.0/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../assets/AdminLTE-3.2.0/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
</head>

<body class="dark-mode layout-navbar-fixed sidebar-collapse layout-fixed sidebar-mini-md" style="height: auto;">
  <!-- Site wrapper -->
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand bg-dark navbar-light bg-white">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="../" class="nav-link">Home</a>
        </li>

      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="logout.php" role="button">
            <i class="fas fa-sign-out-alt"></i> Logout
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="../assets/AdminLTE-3.2.0/index3.html" class="brand-link">
        <img src="../assets/AdminLTE-3.2.0/dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
          class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-bold">Alignleft</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar" style="overflow-y: auto;">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="../assets/AdminLTE-3.2.0/dist/img/user2-160x160.jpg" class="img-circle elevation-2"
              alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block">Admin</a>
          </div>
        </div>



        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column nav-legacy nav-collapse-hide-child" data-widget="treeview"
            role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item">
              <a href="?p=" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Dashboard
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-users"></i>
                <p>
                  Data Member
                  <i class="fas fa-angle-left right"></i>
                  <span class="badge badge-info right">100</span>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="?p=data-member" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Member</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="../layout/fixed-footer.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Detail Transaksi</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="../layout/collapsed-sidebar.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Akun Member</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-chart-pie"></i>
                <p>
                  Data Materi
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-cog"></i>
                <p>
                  Settings
                </p>
              </a>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" style="min-height: 239px;">
      
        <?php 
        if( isset($_GET['p']) ) {
            include 'config.php';
        } else {
            echo "<script>document.location.href = '?p=';</script>";
        }
        ?>
      
    </div>
    <!-- /.content-wrapper -->

    <footer class="main-footer">
      <div class="float-right d-none d-sm-block">
        <b>Created by</b> Bim
      </div>
      <strong>Copyright © 2022 <a href="https://instagram.com/alignleft_">Alignleft</a>.</strong> All rights reserved.
    </footer>
    <div id="sidebar-overlay"></div>
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="../assets/AdminLTE-3.2.0/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="../assets/AdminLTE-3.2.0/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- data table & plugin -->
  <!-- DataTables  & Plugins -->
  <script src="../assets/AdminLTE-3.2.0/plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="../assets/AdminLTE-3.2.0/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="../assets/AdminLTE-3.2.0/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="../assets/AdminLTE-3.2.0/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <script src="../assets/AdminLTE-3.2.0/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
  <script src="../assets/AdminLTE-3.2.0/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
  <script src="../assets/AdminLTE-3.2.0/plugins/jszip/jszip.min.js"></script>
  <script src="../assets/AdminLTE-3.2.0/plugins/pdfmake/pdfmake.min.js"></script>
  <script src="../assets/AdminLTE-3.2.0/plugins/pdfmake/vfs_fonts.js"></script>
  <script src="../assets/AdminLTE-3.2.0/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
  <script src="../assets/AdminLTE-3.2.0/plugins/datatables-buttons/js/buttons.print.min.js"></script>
  <script src="../assets/AdminLTE-3.2.0/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../assets/AdminLTE-3.2.0/dist/js/adminlte.min.js"></script>

  <script>
    $(function(){
      $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"],
      "info": false,
      "footer":false
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    });
  </script>
</body>

</html>