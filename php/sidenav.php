<?php include 'insert.php';?>
<?php include 'dbcon.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta id="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta id="description" content="">
    <meta id="author" content="">

    <title>Admin Page Pancitan Kay Elmer</title>

    <!-- Custom fonts -->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles-->
    <link href="../css/sb-admin-2.css" rel="stylesheet">
    <link href="../css/custom.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="admin.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <span style="font-size: 2rem;" class="material-icons-sharp">
                        admin_panel_settings
                    </span>
                </div>
                <div class="sidebar-brand-text mx-3">Admin Page</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="admin.php">
                    <span style="font-size: 1.2rem;" class="material-icons-sharp">
                        dashboard
                    </span>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">


            <!-- Nav Item - Menu -->
            <li class="nav-item active">
                <a class="nav-link" href="menu.php">
                    <span style="font-size: 1.3rem;" class="material-icons-sharp">
                        ramen_dining
                    </span>
                    <span>Menu</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">
            <!-- Nav Item - Booking -->
            <li class="nav-item active">
                <a class="nav-link" href="menu.php">
                <i class="fa fa-book ml-2" aria-hidden="true"></i>
                    <span class="ml-3">Booking</span></a>
            </li>


            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

             <!-- Divider -->
             <hr class="sidebar-divider">
            <!-- Nav Item - Booking -->
            <li class="nav-item active">
                <a class="nav-link" href="login.php" data-toggle="modal" data-target="#logoutModal">
                <i class="fas fa-sign-out-alt fa-1x fa-fw ml-2 text-gray-400"></i>
                <span class="ml-3">Logout</span></a>
            </li>
            
            
           
        </ul>
        <!-- End of Sidebar -->

        

        </div>
        <!-- End of Page Wrapper -->

        <!--Modal Delete Product-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header bg-dark">
                                <h5 class="modal-title text-white" id="exampleModalLabel2">Logout</h5>
                                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <h6 class="text-gray-800"> Are you sure you want to Logout?</h6>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-warning" data-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn btn-primary" id="submit" value="Delete" name="logout" onclick="Logout()">Yes</button>
                            </div>
                        </div>
                    </div>
                </div>

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Bootstrap core JavaScript-->
        <script src="../vendor/jquery/jquery.min.js"></script>
        <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="../js/sb-admin-2.min.js"></script>
        <script src="../js/custom.js"></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        <script>
            function Logout()
            {
                Swal.fire('Logout Success');
                window.location.href='login.php';
            }
        </script>

</body>

</html>