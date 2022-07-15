<?php include 'dbcon.php';?>

                <?php
                    if(isset($_POST['EDIT']))
                    {
                        $Proname = $_POST['upprodname'];
                        $Udetails = $_POST['updetails'];
                        $Uprice = $_POST['upprice'];
                        $Uimage = $_POST['upimage'];
                        $Uid = $_POST['id'];

                        $usql = "UPDATE tblmenu SET Product_name = '$Proname', details = '$Udetails', price = '$Uprice', images = '$Uimage' WHERE ID = '$Uid' ";
                        $usql_run = mysqli_query($conn, $usql);

                        if($usql_run)
                        {
                            echo '<script>Swal.fire("Updated Successfully","","success");</script>';
                           // header('location:menu.php');
                              
                        }
                        else
                        {
                            echo '<script>Swal.fire("Updated Failed","","error");</script>';
                        }
                    }
                
                ?>
