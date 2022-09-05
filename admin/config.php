<?php
if($_GET['p'] == '' ){
  include 'pages/home.php';
} else if( $_GET['p'] == 'data-member' ) {
  include 'pages/member.php';
} else if( $_GET['p'] == 'transaksi' ){
  include 'pages/transaksi.php';
}