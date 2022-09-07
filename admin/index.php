<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Focus Admin: Creative Admin Dashboard</title>
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
  <link href="../assets/focus/theme/css/lib/calendar2/pignose.calendar.min.css" rel="stylesheet">
  <link href="../assets/focus/theme/css/lib/chartist/chartist.min.css" rel="stylesheet">
  <link href="../assets/focus/theme/css/lib/font-awesome.min.css" rel="stylesheet">
  <link href="../assets/focus/theme/css/lib/themify-icons.css" rel="stylesheet">
  <link href="../assets/focus/theme/css/lib/owl.carousel.min.css" rel="stylesheet" />
  <link href="../assets/focus/theme/css/lib/owl.theme.default.min.css" rel="stylesheet" />
  <link href="../assets/focus/theme/css/lib/weather-icons.css" rel="stylesheet" />
  <link href="../assets/focus/theme/css/lib/menubar/sidebar.css" rel="stylesheet">
  <link href="../assets/focus/theme/css/lib/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/focus/theme/css/lib/helper.css" rel="stylesheet">
  <link href="../assets/focus/theme/css/style.css" rel="stylesheet">
</head>

<body>

  <div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
    <div class="nano">
      <div class="nano-content">
        <ul>
          <div class="logo"><a href="index.html">
              <!-- <img src="images/logo.png" alt="" /> --><span>Alignleft</span>
            </a></div>
          <li class="label">Home</li>
          <li><a href="app-widget-card.html"><i class="ti-home"></i> Dashboard</a></li>

          <li class="label">Data</li>
          <li><a class="sidebar-sub-toggle"><i class="ti-user"></i> Member <span
                class="sidebar-collapse-icon ti-angle-down"></span></a>
            <ul>
              <li><a href="font-themify.html">Data Member</a></li>
              <li><a href="font-themify.html">Akun Member</a></li>
            </ul>
          </li>
          <li><a href="app-widget-card.html"><i class="ti-shopping-cart"></i> Data Transaksi</a></li>
          <li><a href="app-widget-card.html"><i class="ti-layout-grid2-alt"></i> Data Materi</a></li>
          <li class="label">Settings</li>
          <li><a class="sidebar-sub-toggle"><i class="ti-layout"></i> Web View <span
                class="sidebar-collapse-icon ti-angle-down"></span></a>
            <ul>
              <li><a href="ui-typography.html">Typography</a></li>
              <li><a href="ui-alerts.html">Alerts</a></li>

              <li><a href="ui-button.html">Button</a></li>
              <li><a href="ui-dropdown.html">Dropdown</a></li>

              <li><a href="ui-list-group.html">List Group</a></li>

              <li><a href="ui-progressbar.html">Progressbar</a></li>
              <li><a href="ui-tab.html">Tab</a></li>

            </ul>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <!-- /# sidebar -->

  <div class="header">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="float-left">
            <div class="hamburger sidebar-toggle">
              <span class="line"></span>
              <span class="line"></span>
              <span class="line"></span>
            </div>
          </div>
          <div class="float-right">
            <div class="dropdown dib">
              <div class="header-icon" data-toggle="dropdown">
                <span class="user-avatar">John
                  <i class="ti-angle-down f-s-10"></i>
                </span>
                <div class="drop-down dropdown-profile dropdown-menu dropdown-menu-right">
                  <div class="dropdown-content-body">
                    <ul>
                      <li>
                        <a href="#">
                          <i class="ti-settings"></i>
                          <span>Setting</span>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="ti-power-off"></i>
                          <span>Logout</span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="content-wrap">
    <div class="main">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-8 p-r-0 title-margin-right">
            <div class="page-header">
              <div class="page-title">
                <h1>Hello, <span>Welcome Here</span></h1>
              </div>
            </div>
          </div>
          <!-- /# column -->
          <div class="col-lg-4 p-l-0 title-margin-left">
            <div class="page-header">
              <div class="page-title">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                  <li class="breadcrumb-item active">Home</li>
                </ol>
              </div>
            </div>
          </div>
          <!-- /# column -->
        </div>
        <!-- /# row -->
        <section id="main-content">


          <div class="row">
            <div class="col-lg-12">
              <div class="footer">
                <p>2018 © Admin Board. - <a href="#">example.com</a></p>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>

  <!-- jquery vendor -->
  <script src="../assets/focus/theme/js/lib/jquery.min.js"></script>
  <script src="../assets/focus/theme/js/lib/jquery.nanoscroller.min.js"></script>
  <!-- nano scroller -->
  <script src="../assets/focus/theme/js/lib/menubar/sidebar.js"></script>
  <script src="../assets/focus/theme/js/lib/preloader/pace.min.js"></script>
  <!-- sidebar -->

  <script src="../assets/focus/theme/js/lib/bootstrap.min.js"></script>
  <script src="../assets/focus/theme/js/scripts.js"></script>
  <!-- bootstrap -->

  <script src="../assets/focus/theme/js/lib/calendar-2/moment.latest.min.js"></script>
  <script src="../assets/focus/theme/js/lib/calendar-2/pignose.calendar.min.js"></script>
  <script src="../assets/focus/theme/js/lib/calendar-2/pignose.init.js"></script>


  <script src="../assets/focus/theme/js/lib/weather/jquery.simpleWeather.min.js"></script>
  <script src="../assets/focus/theme/js/lib/weather/weather-init.js"></script>
  <script src="../assets/focus/theme/js/lib/circle-progress/circle-progress.min.js"></script>
  <script src="../assets/focus/theme/js/lib/circle-progress/circle-progress-init.js"></script>
  <script src="../assets/focus/theme/js/lib/chartist/chartist.min.js"></script>
  <script src="../assets/focus/theme/js/lib/sparklinechart/jquery.sparkline.min.js"></script>
  <script src="../assets/focus/theme/js/lib/sparklinechart/sparkline.init.js"></script>
  <script src="../assets/focus/theme/js/lib/owl-carousel/owl.carousel.min.js"></script>
  <script src="../assets/focus/theme/js/lib/owl-carousel/owl.carousel-init.js"></script>
  <!-- scripit init-->
  <script src="../assets/focus/theme/js/dashboard2.js"></script>
</body>

</html>