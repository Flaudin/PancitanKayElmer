<?php include_once 'dbcon.php';?>

<?php

$id = $_GET['ID'];
mysqli_query($conn,"DELETE FROM tblmenu WHERE ID='$id'");
//header('location:menu.php');
exit();
?>