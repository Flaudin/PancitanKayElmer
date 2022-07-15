<?php include_once 'dbcon.php';?>
<?php
$sqlread = "SELECT * from tblpro";

if ($result = mysqli_query($conn,$sqlread))
{
    $rowcount = mysqli_num_rows ($result);
}
//mysqli_close($conn);

?>