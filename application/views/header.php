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
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/style_custom.css">
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
        <span class="info"><i class="icon-phone2"></i>044 - 6672 6620</span>
        <span class="info"><i class="icon-mail"></i>principalnursing@saveetha.com</span>
        </div>
        <ul class="social_top pull-right">
          <li><a href="#."><i class="fa fa-facebook"></i></a></li>
          <li><a href="#."><i class="icon-twitter4"></i></a></li>
          <li><a href="#."><i class="icon-google"></i></a></li>
        </ul>
      </div>
    </div>
    <div style="padding: 15px 0; margin: 0" class="row">
      <div style="padding: 5px;" class="col-sm-2">
	      <a href="<?php echo base_url() ?>">
          <img style="width: 100%" src="<?php echo base_url()?>/images/sconlogo.png">
        </a>
      </div>
      <div style="padding: 5px;" class="col-sm-offset-7 col-sm-3">
	      <a href="<?php echo base_url() ?>">
          <img style="width: 100%" src="<?php echo base_url()?>/images/sulogo.png">
        </a>
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
          <img src="<?php echo base_url()?>images/scon25.jpg">
        </a> -->
      </div>
      <div class="collapse navbar-collapse" id="navbar-menu">
        <ul class="nav navbar-nav" data-in="fadeInDown" data-out="fadeOut">
        <li class='<?php if($active_page == 'home') echo 'active' ?>' ><a href="<?php echo base_url() ?>">Home</a></li>
          <li class="dropdown <?php if($active_page == 'about') echo 'active' ?>">
            <a href="#" class="dropdown-toggle dropdown" data-toggle="dropdown" >About</a>
            <ul class="dropdown-menu">
              <li><a href="<?php echo base_url()?>about/history">Our History- Inception</a></li>
              <li><a href="<?php echo base_url()?>about/vision">Vision & Mission + Quality Policy</a></li>
              <li><a href="<?php echo base_url()?>about/leadership">Our Leadership</a></li>
              <li><a href="<?php echo base_url()?>about/accreditation">Accreditation & Recognitions</a></li>
              <li><a href="<?php echo base_url()?>about/committees">Committees & Authorities</a></li>
              <li><a href="<?php echo base_url()?>about/location">Location & Accessibility</a></li>
            </ul>
          </li>
          <li class="dropdown <?php if($active_page == 'campus') echo 'active' ?>">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Campus</a>
            <ul class="dropdown-menu">
              <li><a href="<?php echo base_url()?>campus/infrastructure">Infrastructure</a></li>
              <li><a href="<?php echo base_url()?>campus/library">Library</a></li>
              <li><a href="<?php echo base_url()?>campus/hostels">Hostels</a></li>
              <li><a href="<?php echo base_url()?>campus/transport">Transport with Bus route</a></li>
              <li><a href="<?php echo base_url()?>campus/recreation">Recreation</a></li>
            </ul>
          </li>
          <li class="dropdown <?php if($active_page == 'academics') echo 'active' ?>">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Academics</a>
            <ul class="dropdown-menu">
              <li><a href="<?php echo base_url()?>academics/bsc">B.Sc Nursing</a></li>
              <li><a href="<?php echo base_url()?>academics/pbbsc">P.B.B.Sc Nursing</a></li>
              <li><a href="<?php echo base_url()?>academics/msc">Post Graduation - M.Sc. Nursing</a></li>
            </ul>
          </li>
          <li class="dropdown <?php if($active_page == 'admissions') echo 'active' ?>">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Admissions</a>
            <ul class="dropdown-menu">
              <li><a href="<?php echo base_url()?>admissions/why">Why Choose Us</a></li>
              <li><a href="<?php echo base_url()?>admissions/courses">Courses Offered</a></li>
              <li><a href="<?php echo base_url()?>admissions/apply">Apply</a></li>
              <li><a href="<?php echo base_url()?>admissions/guidelines">Admission Guidelines</a></li>
            </ul>
          </li>
          <li class="dropdown <?php if($active_page == 'dept') echo 'active' ?>">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" >DEPARTMENTS</a>
            <ul class="dropdown-menu">
              <li><a href="<?php echo base_url()?>department/medical_surgical_nursing">Medical Surgical Nursing</a></li>
              <li><a href="<?php echo base_url()?>department/child_health_nursing">Child Health Nursing</a></li>
              <li><a href="<?php echo base_url()?>department/community_health_nursing">Community Health Nursing</a></li>
              <li><a href="<?php echo base_url()?>department/mental_health_nursing">Mental Health Nursing</a></li>
              <li><a href="<?php echo base_url()?>department/obstetrics_gynaecological_nursing">Obstetrics and Gynaecological Nursing</a></li>
              <li><a href="<?php echo base_url()?>department/nursing_foundation">Department of Nursing Foundation</a></li>
            </ul>
          </li>
          <li class="dropdown <?php if($active_page == 'student') echo 'active' ?>">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" >STUDENT LIFE</a>
            <ul class="dropdown-menu">
              <li><a href="<?php echo base_url()?>student/events">Events</a></li>
              <li><a href="<?php echo base_url()?>student/photos">Photo Gallery</a></li>
              <li><a href="<?php echo base_url()?>student/clubs">Student Clubs</a></li>
            </ul>
          </li>
          <li class="<?php if($active_page == 'research') echo 'active' ?>"><a href="<?php echo base_url()?>research">RESEARCH</a></li>
          <li class="<?php if($active_page == 'alumni') echo 'active' ?>"><a href="<?php echo base_url()?>alumni">Alumni</a></li>
          <li class="dropdown <?php if($active_page == 'community') echo 'active' ?>">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Community Centre</a>
            <ul class="dropdown-menu">
              <li><a href="<?php echo base_url()?>community/rural">Rural Health Centre</a></li>
              <li><a href="<?php echo base_url()?>community/urban">Urban Health Centre</a></li>
            </ul>
          </li>
          <!-- <li><a href="#">STUDENT LIFE</a></li> -->
          <!-- <li><a href="#">Alumni</a></li> -->
          <li class="<?php if($active_page == 'hospital') echo 'active' ?>"><a href="<?php echo base_url()?>hospital">HOSPITAL</a></li>
        </ul>
      </div>
    </div>
  </nav>
</header>
