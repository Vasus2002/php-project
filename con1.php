<?php
$db=mysqli_connect("localhost", "root","","chocofactory");
// Check connection
if ($db) {
   // die("Connection failed: " . mysqli_connect_error());
    //echo"connected";
}
else{
	echo"not";
	//header("location:employee_insert.php?Connection successfully");
}
?>