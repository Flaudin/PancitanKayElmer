<?php require_once 'dbcon.php'; ?>
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
   
        <!-- <//?php include 'sidenav.php';?> -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4 mt-6">
                        <h1 class="h3 mb-0 text-gray-800 mt-4">Product List(s)</h1>
                    </div>
                    <!-- Content Column -->
                    <div class="col-lg-12">
                    <!-- Content Row -->
                    <div class="row">
                            <div class="col-lg-2 mb-4 mx-auto">

                                <!-- Illustrations -->
                                <div class="card shadow mb-4">
                                    <div class="card-body">
                                        <div class="text-center">
                                            <a href="#addnew" type="button" data-toggle="modal" ><span
                                                    class="material-icons-sharp mt-2">add_circle</span></a>
                                        </div>
                                        <p class="text-center ">Add new</p>
                                        <!-- <//?php include 'addpro.php';?> -->
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="table-responsive">
                        <?php
                        $sql = "SELECT * FROM tblmenu";
                        $sql_runn = mysqli_query($conn, $sql);

                        if(mysqli_num_rows($sql_runn) > 0) 
                        {
                            
                            ?>                          
                        <table class="table table-hover">
                            <thead class="thead-dark">
                             <tr>
                                 <th class="col-sm-1">ID</th>
                                <th class="col-sm-3">Product Name</th>
                                <th class="col-sm-5">Details</th>
                                <th class="col-sm-2">Price</th>
                                <th class="col">Image</th>
                                <th class="col"></th>
                                <th class="col"></th>
                                </tr>
                                <tbody>
                                    <?php
                                    while($row = mysqli_fetch_assoc($sql_runn))
                                    {
                                    ?>
                                    <tr>
                                        <td><?php echo $row['ID']; ?></td>
                                        <td scope="row"><?php echo $row['Product_name']; ?></td>
                                         <td><?php echo $row['details']; ?></td>
                                         <td><?php echo $row['price']; ?></td>
                                         <td><img class="img-fluid" src="../images/menu/<?php echo $row['images']; ?>" alt="Products"></td>
                                         <td>
                                            <a href="#edit<?php echo $row['ID'];?>" data-toggle="modal" class="btn btn-warning mr-3">Edit</a>
                                            <a href="#del<?php echo$row['ID']; ?>" class="btn btn-danger" type="button" data-toggle="modal">Delete</a>
                                            <!-- <//?php include 'modals.php'?> -->
                                        </td>
                                    </tr>
                                    <?php
                                    }
                                    ?>
                            </tbody>
                        </thead>
                    </table>
                    <?php
                        }
                        else
                        {
                            echo "No data found!";
                        }
                        ?>
                </div>
            </div>
            </div>
            <!-- /.container-fluid -->
                </div>
                <!-- End of Main Content -->

                <?php include 'footer.php';?>
            </div>
            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

       <?php include 'scripts.php'?>

        <script>
            $(document).ready(function () {

            $('.updateModal').click( function () {
                $("#upId").val();
                $("#upId").val($(this).attr("id"));

            $('#updateModal').modal('show');

            
            });
            });
        </script>
        

</body>

</html>