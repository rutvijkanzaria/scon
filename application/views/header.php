<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<title>Saveetha College of Nursing</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/edua-icons.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/animate.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/owl.transitions.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/cubeportfolio.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/settings.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/bootsnav.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/style.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/loader.css">

<link rel="icon" href="<?php echo base_url()?>images/favicon.png">

<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="pushmenu-push">
<a href="#" class="scrollToTop"><i class="fa fa-angle-up"></i></a>
<!--Loader-->
<div class="loader">
  <div class="bouncybox">
      <div class="bouncy"></div>
    </div>
</div>

<div class="topbar">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="pull-left">
        <span class="info"><a href="#."> Have any question?</a></span>
        <span class="info"><i class="icon-phone2"></i>(654) 332-112-222</span>
        <span class="info"><i class="icon-mail"></i>support@edua.com</span>
        </div>
        <ul class="social_top pull-right">
          <li><a href="#."><i class="fa fa-facebook"></i></a></li>
          <li><a href="#."><i class="icon-twitter4"></i></a></li>
          <li><a href="#."><i class="icon-google"></i></a></li>
        </ul>
      </div>
    </div>
  </div>
</div>

<!--Header-->
<header>
  <nav class="navbar navbar-default navbar-fixed white no-background bootsnav">
    <div class="container-fluid"> 
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
          <i class="fa fa-bars"></i>
        </button>
        <!-- <a class="navbar-brand" href="<?php echo base_url() ?>">
          <img src="<?php echo base_url()?>/images/sconlogo.png">
        </a> -->
      </div>
      <div class="collapse navbar-collapse" id="navbar-menu">
        <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOut">
        <li class='<?php if($active_page == 'home') echo 'active' ?>' ><a href="<?php echo base_url() ?>">Home</a></li>
          <li class="dropdown <?php if($active_page == 'about') echo 'active' ?>">
            <a href="#" class="dropdown-toggle dropdown" data-toggle="dropdown" >About</a>
            <ul class="dropdown-menu">
              <li><a href="<?php echo base_url()?>about/history">Our History- Inception</a></li>
              <li><a href="#">Vision & Mission + Quality Policy</a></li>
              <li><a href="#">Accreditation & Recognitions</a></li>
              <li><a href="#">Committees & Authorities</a></li>
              <li><a href="#">Location & Accessibility</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Campus</a>
            <ul class="dropdown-menu">
              <li><a href="#">Infrastructure</a></li>
              <li><a href="#">Library</a></li>
              <li><a href="#">Hostels</a></li>
              <li><a href="#">Transport with Bus route</a></li>
              <li><a href="#">Recreation</a></li>
              <li><a href="#">Student Life</a></li>
            </ul>
          </li>
          <li class="dropdown <?php if($active_page == 'dept') echo 'active' ?>">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" >DEPARTMENTS</a>
            <ul class="dropdown-menu">
              <li><a href="<?php echo base_url()?>MedicalSurgicalNursing">Medical Surgical Nursing</a></li>
              <li><a href="<?php echo base_url()?>ChildHealthNursing">Child Health Nursing</a></li>
              <li><a href="#">Community Health Nursing</a></li>
              <li><a href="#">Mental Health Nursing</a></li>
              <li><a href="#">Obstetrics and Gynaecological Nursing</a></li>
              <li><a href="#">Department of Nursing Foundation</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Academics</a>
            <ul class="dropdown-menu">
              <li><a href="#">B.Sc Nursing</a></li>
              <li><a href="#">P.B.B.Sc Nursing</a></li>
              <li><a href="#">Post Graduation - M.Sc. Nursing</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Community Centre</a>
            <ul class="dropdown-menu">
              <li><a href="#">Rural Health Centre</a></li>
              <li><a href="#">Urban Health Centre</a></li>
            </ul>
          </li>
          <!-- <li><a href="#">STUDENT LIFE</a></li> -->
          <li><a href="#">RESEARCH</a></li>
          <!-- <li><a href="#">Alumni</a></li> -->
          <li><a href="#">HOSPITAL</a></li>
          <li><a href="#">Contact Us</a></li>
        </ul>
      </div>
    </div>
  </nav>
</header>
