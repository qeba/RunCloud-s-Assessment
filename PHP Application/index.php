<?php
include "function.php";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Dashboard | Disk 1.0 </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Golan with PHP RabbitMQ" name="www.qeba.my" />
        <meta content="Disk1.0" name="qeba" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" id="bootstrap-stylesheet" />
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/app.min.css" rel="stylesheet" type="text/css"  id="app-stylesheet" />

    </head>

    <body>

        <!-- Begin page -->
        <div id="wrapper">

            
            <!-- Topbar Start -->
            <div class="navbar-custom">


                <!-- LOGO -->
                <div class="logo-box">
                    <a href="index.php" class="logo text-center logo-dark">
                        <span class="logo-lg">
                            <img src="assets/images/logo.png" alt="" height="22">
                            <!-- <span class="logo-lg-text-dark">Uplon</span> -->
                        </span>
                        <span class="logo-sm">
                            <!-- <span class="logo-lg-text-dark">U</span> -->
                            <img src="assets/images/logo-sm.png" alt="" height="24">
                        </span>
                    </a>

                    <a href="index.php" class="logo text-center logo-light">
                        <span class="logo-lg">
                            <img src="assets/images/logo-light.png" alt="" height="22">
                            <!-- <span class="logo-lg-text-dark">Uplon</span> -->
                        </span>
                        <span class="logo-sm">
                            <!-- <span class="logo-lg-text-dark">U</span> -->
                            <img src="assets/images/logo-sm-light.png" alt="" height="24">
                        </span>
                    </a>
                </div>
                
                <!--- menu sini jangan usik ---> 
                <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
                    <li>
                        <button class="button-menu-mobile waves-effect waves-light">
                            <i class="mdi mdi-menu"></i>
                        </button>
                    </li>
                </ul>
                 
                                
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </li>
                </ul>
            </div>
            <!-- end Topbar -->

            
            <!-- ========== Left Sidebar Start ========== -->
            <div class="left-side-menu">

                <div class="slimscroll-menu">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">

                        <ul class="metismenu" id="side-menu">

                            <li class="menu-title">Navigation</li>

                            <li>
                                <a href="index.php">
                                    <i class="mdi mdi-view-dashboard"></i>
                                    <span> Dashboard </span>
                                </a>
                            </li>

                          
                        </ul>

                    </div>
                    <!-- End Sidebar -->

                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">
                    
                    <!-- Start Content-->
                    <div class="container-fluid">
                        
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                 
                                    </div>
                                    <h4 class="page-title">Dashboard</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <div class="row">
                            

                            

                        


                        </div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-lg-12 col-xl-7">
                                
                <div class="card-box">
                                   
                <h3 class="header-title mb-4">Disk Information</h3>
                    
                    <p class="font-weight-semibold mb-2">Disk Available <span class="text-success float-right"><b><?php echo $roudAvail  ?> GB</b></span></p>
                    <div class="progress" style="height: 10px;">
                     <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: <?php echo $pecentAvail  ?>%" aria-valuenow="0" aria-valuemin="<?php echo $pecentAvail  ?>" aria-valuemax="<?php echo $pecentTotal  ?>"></div>                                           
                    </div>
                   
                    <p></p>

                     <p class="font-weight-semibold mb-2">Disk Used <span class="text-danger float-right"><b><?php echo $roudUsed  ?> GB</b></span></p>
                     <div class="progress" style="height: 10px;">
                      <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: <?php echo $pecentUsed  ?>%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="<?php echo $pecentTotal  ?>"></div>
                    </div>
                    
                     <p></p>
                    <p class="font-weight-semibold mb-2">Disk Size <span class="text-warning float-right"><b><?php echo $roudTotal ?> GB</b></span></p>
                    <div class="progress" style="height: 10px;">
                      <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: <?php echo $pecentTotal  ?>%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="<?php echo $pecentTotal  ?>"></div>
                    </div>
                    
                    </div>
                   

                        </div>

       
       
                
                            
                            <div class="col-lg-3 col-xl-3">
                            <div class="card-box">
                                   
                                <h3 class="header-title mb-2">Control Box</h3>
                                <div class="alert alert-info alert-dismissible fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">×</span></button>
                                                    <h5>Login RabbitMQ</h5>
                                                    <strong>Username:</strong> test
                                                    <p><strong>Password:</strong> test</p>
                                    </div>
                                    <p></p>
                                    <button type="button" class="btn btn-dark waves-effect waves-light"  onClick="window.location.reload();">Refresh</button>
                                    <button type="button" class="btn btn-danger waves-effect waves-light" onclick="window.location.href = 'http://srv.qeba.my:15672/','newwindow';">RabbitMQ</button>
                                    <p></p>

                           

                            </div>
                            </div><!-- end col-->
                        <!-- end row -->


                      
                 
                        
                    </div> <!-- end container-fluid -->

                </div> <!-- end content -->

                

                <!-- Footer Start -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                2019 &copy; Disk by <a href="https://qeba.my">Muhd Iqbal</a>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->

        </div>
        <!-- END wrapper -->

       

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <a href="#" class="right-bar-toggle demos-show-btn">
            <i class="mdi mdi-settings-outline mdi-spin"></i> &nbsp;Demo
        </a>

        <!-- Vendor js -->
        <script src="assets/js/vendor.min.js"></script>

        <!--Morris Chart-->
        <script src="assets/libs/morris-js/morris.min.js"></script>
        <script src="assets/libs/raphael/raphael.min.js"></script>

        <!-- Dashboard init js-->
        <script src="assets/js/pages/dashboard.init.js"></script>


        <!-- App js -->
        <script src="assets/js/app.min.js"></script>
        
    </body>
</html>

