<?php
ob_start(); // needs to be added here
?>
<!DOCTYPE html>
<html>


<body>
  <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full" data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
    <header class="topbar" data-navbarbg="skin5">
      <nav class="navbar top-navbar navbar-expand-md navbar-light bg-dark">
        <div class="navbar-header" data-logobg="skin5">
          <a class="navbar-brand" href="index">
            <b class="logo-icon ps-2"></b>
            <span class="logo-text text-center">
              <img src="../../assets/img/logo/KH-logo-new.webp" alt="homepage" class="light-logo"  />
            </span>

          </a>
          <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
        </div>
        <div class="navbar-collapse collapse bg-light" id="navbarSupportedContent" data-navbarbg="skin5">
          <ul class="navbar-nav bg-light float-start me-auto">
            <li class="nav-item d-none d-lg-block">
              <a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)" data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a>
            </li>
          </ul>
          <ul class="navbar-nav float-end">


            <li class="nav-item dropdown">
              <a class="
                    nav-link
                    dropdown-toggle
                    text-muted
                    waves-effect waves-dark
                    pro-pic
                  " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="../assets/images/users/1.jpg" alt="user" class="rounded-circle" width="31" />
              </a>
              <ul class="dropdown-menu dropdown-menu-end user-dd animated" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="logout.php"><i class="fa fa-power-off me-1 ms-1"></i> Logout</a>
              </ul>
            </li>
          </ul>
        </div>
      </nav>
    </header>
    <aside class="left-sidebar" data-sidebarbg="skin5">
      <div class="scroll-sidebar">
        <nav class="sidebar-nav" >
          <ul id="sidebarnav" class="pt-2">
            <li class="sidebar-item">
              <a class="sidebar-link waves-effect waves-dark sidebar-link" href="index.php" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Dashboard</span></a>
            </li>
           
            <li class="sidebar-item">
              <a class="sidebar-link waves-effect waves-dark sidebar-link" href="manage_blog.php" aria-expanded="false"><i class="fas fa-archive"></i>
                <span class="hide-menu">Manage Blog</span></a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link waves-effect waves-dark sidebar-link" href="manage_service.php" aria-expanded="false"><i class="fas fa-archive"></i>
                <span class="hide-menu">Manage Service</span></a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link waves-effect waves-dark sidebar-link" href="manage_photos.php" aria-expanded="false"><i class="fas fa-archive"></i>
                <span class="hide-menu">Manage Photos</span></a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link waves-effect waves-dark sidebar-link" href="manage_videos.php" aria-expanded="false"><i class="fas fa-archive"></i>
                <span class="hide-menu">Manage Videos</span></a>
            </li>
            
            <li class="sidebar-item">
              <a class="sidebar-link waves-effect waves-dark sidebar-link" href="manage_testimonial.php" aria-expanded="false"><i class="fas fa-archive"></i>
                <span class="hide-menu">Manage Testimonial</span></a>
            </li>
           
          </ul>
        </nav>
        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
    </aside>

    <?php
    require('connection.inc.php');
    require('functions.inc.php');
    if (isset($_SESSION['ADMIN_LOGIN']) && $_SESSION['ADMIN_LOGIN'] != '') {
    } else {
      header('location:login.php');
      die();
    }
    ?>