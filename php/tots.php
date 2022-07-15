<?php include_once 'dbcon.php';?>

<?php

$sql = "SELECT count(*) FROM tblmenu";

$result = $conn->query($sql);
  
// Display data on web page
while($row = mysqli_fetch_array($result)) {
    echo "Total Products listed ". $row['count(*)'];
    echo "<br />";
}
   
// Close the connection
$conn->close();
  
?>