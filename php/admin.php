

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

<?php include 'sidenav.php';?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">





<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4 mt-6">
        <h1 class="h3 mb-0 text-gray-800 mt-4">Dashboard</h1>
    </div>

    <!-- Content Row -->
    <div class="row">
        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-6 col-md-8 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Total Product(s)</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $rowcount?> Product(s) Listed</div>
                            <?php?>
                        </div>
                        <div class="col-auto">
                            <span class="material-icons-sharp" style="font-size: 2.5rem;">
                                dinner_dining
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


        <!-- Content Column -->
        <div class="col-lg-12">
        <!-- Content Row -->
        <div class="row">
        <?php
            require 'dbcon.php';
            
            $sql = "SELECT * from tblpro";
            $query_run = mysqli_query($conn, $sql);
            $sql_check = mysqli_num_rows($query_run) > 0;

            if($sql_check)
            {
                while($row = mysqli_fetch_assoc($query_run))
                {
            ?>
            <div class="col-xl-3 col-md-8">
                <!-- Product List -->
                <div class="card shadow mb-4 mr-1">
                    <div class="card-header py-3">
                        <div class="text-center">
                            <img class="img-fluid" src="../images/Menu/<?php echo $row['pro_image']; ?>"
                                alt="Products">
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="text-gray-800"><?php echo $row['pro_name']; ?></h5>
                        <p class="mb-0"><?php echo $row['details']; ?></p>
                        <p class="mb-0"><?php echo $row['price']; ?></p>
                    </div>
                </div>
            </div> 
            <?php
                }
            }
            else
            {
                echo "No Data found";
            }
            ?>
            
    </div>
            

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->
    

    <?php include 'footer.php'?>
    <!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
<i class="fas fa-angle-up"></i>
</a>

<?php include 'scripts.php';?>
</body>

</html>