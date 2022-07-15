<?php include 'dbcon.php';

    $Prodname = $_POST['proname'];
    $Details = $_POST['details'];
    $Price = $_POST['price'];
    $Image = $_POST['image'];

    mysqli_query($conn, "INSERT INTO tblmenu (ID, Product_name, details, price, images) VALUES ('','$Prodname', '$Details', '$Price', '$Image')");
    echo "<script>Swal.fire('Product Added','','success')</script>";
    //header('location:menu.php');
    die();
            


?>


