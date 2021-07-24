<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<title>Falasifa Admin</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="description" content="Admindek Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
<meta name="keywords" content="flat ui, admin Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
<meta name="author" content="colorlib" />

<link rel="icon" href="https://colorlib.com/polygon/admindek/files/assets/images/favicon.ico" type="image/x-icon">

<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Quicksand:500,700" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/bootstrap.min.css">
<link rel="stylesheet" href="<?= base_url() ?>assets/css/waves.min.css" type="text/css" media="all">
<link rel="stylesheet" type="text/css" href="css/feather.css">
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/font-awesome-n.min.css">
<link rel="stylesheet" href="<?= base_url() ?>assets/css/chartist.css" type="text/css" media="all">
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/style.css">
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/widget.css">
</head>
<body>

<div class="loader-bg">
<div class="loader-bar"></div>
</div>

<div id="pcoded" class="pcoded">
<div class="pcoded-overlay-box"></div>
<div class="pcoded-container navbar-wrapper">

<nav class="navbar header-navbar pcoded-header">
<div class="navbar-wrapper">
<div class="navbar-logo">

<a href="index.html" class="mt-2">
<!-- <img class="img-fluid" src="<?= base_url() ?>assets/png/logo.png" alt="Theme-Logo" /> -->
<h6 style="font-size: 18px;" class="mt-2">Falasifa Indonesia</h6>
<small style="text-transform:capitalize; font-size:12px;">Custom Made & Ready to Wear</small>
</a>

<a class="mobile-menu" id="mobile-collapse" href="#!">
<i class="feather icon-menu icon-toggle-right"></i>
</a>
<a class="mobile-options waves-effect waves-light">
<i class="feather icon-more-horizontal"></i>
</a>
</div>

<div class="navbar-container container-fluid">
<ul class="nav-left">
<li class="header-search">
<div class="main-search morphsearch-search">
<div class="input-group">
<span class="input-group-prepend search-close">
<i class="feather icon-x input-group-text"></i>
</span>
<input type="text" class="form-control" placeholder="Enter Keyword">
<span class="input-group-append search-btn">
<i class="feather icon-search input-group-text"></i>
</span>
</div>
</div>
</li>
<li>
<a href="#!" onclick="if (!window.__cfRLUnblockHandlers) return false; javascript:toggleFullScreen()" class="waves-effect waves-light" data-cf-modified-d2d1d6e2f87cbebdf4013b26-="">
<i class="full-screen feather icon-maximize"></i>
</a>
</li>
</ul>
<ul class="nav-right">


<li class="user-profile header-notification">
<div class="dropdown-primary dropdown">
<div class="dropdown-toggle" data-toggle="dropdown">
<img src="<?= base_url() ?>assets/jpg/avatar-4.jpg" class="img-radius" alt="User-Profile-Image">
<span><?=$this->session->userdata('name')?></span>
<i class="feather icon-chevron-down"></i>
</div>
<ul class="show-notification profile-notification dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
<!-- <li>
<a href="auth-sign-in-social.html">
<i class="feather icon-log-out"></i> Ubah Password
</a>
</li> -->
<li>
<a href="<?=base_url()?>auth/logout">
<i class="feather icon-log-out"></i> Logout
</a>
</li>
</ul>
</div>
</li>
</ul>
</div>
</div>
</nav>


<div class="pcoded-main-container">
<div class="pcoded-wrapper">

<nav class="pcoded-navbar">
<div class="nav-list">
<div class="pcoded-inner-navbar main-menu">
<div class="pcoded-navigation-label">Navigation Tabs</div>

<ul class="pcoded-item pcoded-left-item">
  <li class="">
  <a href="<?= base_url() ?>admin" class="waves-effect waves-dark">
  <span class="pcoded-micon">
  <i class="feather icon-menu"></i>
  </span>
  <span class="pcoded-mtext">Dashboard</span>
  </a>
  </li>
 <!-- Buat ganti Dashboard -->
 <li class="">
 <a href="<?= base_url() ?>admin/kategori" class="waves-effect waves-dark">
 <span class="pcoded-micon">
 <i class="feather icon-menu"></i>
 </span>
 <span class="pcoded-mtext">Kategori</span>
 </a>
 </li>
  <li class="">
  <a href="<?= base_url() ?>admin/galeri" class="waves-effect waves-dark">
  <span class="pcoded-micon">
  <i class="feather icon-menu"></i>
  </span>
  <span class="pcoded-mtext">Gallery</span>
  </a>
  </li>
  <!-- Buat ganti Dashboard -->

  <li class="">
  <a href="<?= base_url() ?>admin/linkInformation" class="waves-effect waves-dark">
  <span class="pcoded-micon">
  <i class="feather icon-menu"></i>
  </span>
  <span class="pcoded-mtext">Link Information</span>
  </a>
  </li>

  <li class="">
  <a href="<?= base_url() ?>admin/dataUser" class="waves-effect waves-dark">
  <span class="pcoded-micon">
  <i class="feather icon-menu"></i>
  </span>
  <span class="pcoded-mtext">User</span>
  </a>
  </li>
</ul>




</div>
</div>
</nav>

<?php $this->load->view($konten) ?>

<div id="styleSelector">
</div>

</div>
</div>
</div>
</div>


<script data-cfasync="false" src="<?= base_url() ?>assets/js/email-decode.min.js"></script><script type="d2d1d6e2f87cbebdf4013b26-text/javascript" src="<?= base_url() ?>assets/js/jquery.min.js"></script>
<script type="d2d1d6e2f87cbebdf4013b26-text/javascript" src="<?= base_url() ?>assets/js/jquery-ui.min.js"></script>
<script type="d2d1d6e2f87cbebdf4013b26-text/javascript" src="<?= base_url() ?>assets/js/popper.min.js"></script>
<script type="d2d1d6e2f87cbebdf4013b26-text/javascript" src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>

<script src="<?= base_url() ?>assets/js/waves.min.js" type="d2d1d6e2f87cbebdf4013b26-text/javascript"></script>

<script type="d2d1d6e2f87cbebdf4013b26-text/javascript" src="<?= base_url() ?>assets/js/jquery.slimscroll.js"></script>

<script src="<?= base_url() ?>assets/js/jquery.flot.js" type="d2d1d6e2f87cbebdf4013b26-text/javascript"></script>
<script src="<?= base_url() ?>assets/js/jquery.flot.categories.js" type="d2d1d6e2f87cbebdf4013b26-text/javascript"></script>
<script src="<?= base_url() ?>assets/js/curvedlines.js" type="d2d1d6e2f87cbebdf4013b26-text/javascript"></script>
<script src="<?= base_url() ?>assets/js/jquery.flot.tooltip.min.js" type="d2d1d6e2f87cbebdf4013b26-text/javascript"></script>

<script src="<?= base_url() ?>assets/js/chartist.js" type="d2d1d6e2f87cbebdf4013b26-text/javascript"></script>

<script src="<?= base_url() ?>assets/js/amcharts.js" type="d2d1d6e2f87cbebdf4013b26-text/javascript"></script>
<script src="<?= base_url() ?>assets/js/serial.js" type="d2d1d6e2f87cbebdf4013b26-text/javascript"></script>
<script src="<?= base_url() ?>assets/js/light.js" type="d2d1d6e2f87cbebdf4013b26-text/javascript"></script>

<script src="<?= base_url() ?>assets/js/pcoded.min.js" type="d2d1d6e2f87cbebdf4013b26-text/javascript"></script>
<script src="<?= base_url() ?>assets/js/vertical-layout.min.js" type="d2d1d6e2f87cbebdf4013b26-text/javascript"></script>
<script type="d2d1d6e2f87cbebdf4013b26-text/javascript" src="<?= base_url() ?>assets/js/custom-dashboard.min.js"></script>
<script type="d2d1d6e2f87cbebdf4013b26-text/javascript" src="<?= base_url() ?>assets/js/script.min.js"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13" type="d2d1d6e2f87cbebdf4013b26-text/javascript"></script>
<script type="d2d1d6e2f87cbebdf4013b26-text/javascript">
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
<script src="<?= base_url() ?>assets/js/rocket-loader.min.js" data-cf-settings="d2d1d6e2f87cbebdf4013b26-|49" defer=""></script></body>

<!-- Mirrored from colorlib.com/polygon/admindek/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Dec 2019 16:08:25 GMT -->
</html>
