<!DOCTYPE html>
<html lang="en">

<head>
    
</head>

<body class="fix-header">
    <!-- ============================================================== -->
    <!-- Preloader -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
        </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Wrapper -->
    <!-- ============================================================== -->
    <div id="wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header">
                <div class="top-left-part">
                    <!-- Logo -->
                   
                    <b>
                    <a  href="<?php echo base_url('Home')?> ">  
                            <!--This is dark logo icon-->
                            
                            <!--This is light logo icon-->
                            <img src="<?php echo base_url();?>/assets/images/logo4.png" alt="home" class="light-logo" />
                    </a>
                        </b>
                </div>
                <!-- /Logo -->
                <ul class="nav navbar-top-links navbar-right pull-right">
                    <li>
                        <a class="nav-toggler open-close waves-effect waves-light hidden-md hidden-lg" href="javascript:void(0)"><i class="fa fa-bars"></i></a>
                    </li>
                    <li>
                        <form role="search" class="app-search hidden-sm hidden-xs m-r-10">
                            <input type="text" placeholder="Search..." class="form-control"> 
                            <a href="">
                                <i class="fa fa-search"></i>
                            </a> 
                        </form>
                    </li>
                   
                </ul>
            </div>
            <!-- /.navbar-header -->
            <!-- /.navbar-top-links -->
            <!-- /.navbar-static-side -->
        </nav>
        <!-- End Top Navigation -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav slimscrollsidebar">
                <div class="sidebar-head">
                    <h3><span class="fa-fw open-close"><i class="ti-close ti-menu"></i></span> <span class="hide-menu"> Navigation </span></h3>
                </div>
                <ul class="nav" id="side-menu">
                    <li style="padding: 70px 0 0;">
                        <a href="#" class="waves-effect"><i class="fa fa-clock-o fa-spin" aria-hidden="true"></i> Dashboard </a>
                    </li>
                    <li><a class="waves-effect"><i class="fa fa-users"></i> Input Data Dosen <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                    <li><a href="<?php echo base_url('Input_Dosen') ?> " class="waves-effect"><i class="fa fa-user fa-fw" aria-hidden="true"></i> Input Identitas Dosen</a></li>
                      <li><a href="<?php echo base_url('Input_Penelitian') ?> " class="waves-effect"><i class="fa fa-envelope fa-fw" aria-hidden="true"></i> Input Kinerja Penelitian </a></li>
                      <li><a href="<?php echo base_url('Input_Pengabdian') ?> " class="waves-effect"><i class="fa fa-pie-chart  fa-fw" aria-hidden="true"></i> Input Kinerja Pengabdian </a></li>
                      <li><a href="<?php echo base_url('Input_Pendidikan') ?> " class="waves-effect"><i class="fa fa-graduation-cap fa-fw " aria-hidden="true"></i> Input Kinerja Pendidikan </a></li>
                    </ul>   
                    <li><a class="waves-effect"><i class="fa fa-book"></i> Laporan <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="#" class="waves-effect"><i class="fa fa-table fa-fw" aria-hidden="true"></i> Laporan  Data Penelitian </a></li>
                      <li><a href="#" class="waves-effect"><i class="fa fa-font fa-fw" aria-hidden="true"></i> Laporan Data pengabdian </a></li>
                    </ul>
                    <li>
                        <a href="<?php echo base_url('home/logout')?> " class="waves-effect"><i class="fa fa-toggle-left fa-fw" aria-hidden="true"></i> Logout </a>
                    </li>

                </ul>
                
            </div>
            
        </div>
       
    
    
</body>

</html>
