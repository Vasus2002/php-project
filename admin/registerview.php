<?php


session_start(); /* Starts the session */

if ($_SESSION['id'] == false) {
    header("location:login.php");
    exit;
}
include 'views/header.php';


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "chocofactory";

$data=mysqli_connect($servername,$username,$password,$dbname);

$sql="SELECT * FROM register";

$result=mysqli_query($data,$sql);
	?>
	
	

	
	
	<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/stylesheet.css">
    
    <title>Admin Dashboard</title>
	<style type="text/css">
	.table_th
	{
		padding:20px;
		font-size:20px;
		background-color:#5077be;
	}
	.table_td
	{
		padding:10px;
	}
	</style>
</head>
<body>

	<div class="content">
	
	<center>
	<h1>Register details</h1>
	<br><br>
	<table border="3px">
	<tr>
	<th class="table_th">First Name</th>
	<th class="table_th">Last Name</th>
	<th class="table_th">City</th>
	<th class="table_th">Contact</th>
	<th class="table_th">Email</th>
	<th class="table_th">Password</th>
	<th class="table_th">Confirm Password</th>
	
	
	</tr>
	
	<?php
	while($info=$result->fetch_assoc())
	{
	
	?>
	<tr>
	<td class="table_td">
	<?php echo "{$info['firstname']}";?>
	</td>
	<td class="table_td">
	<?php echo "{$info['lastname']}";?>
	</td>
	<td class="table_td">
	<?php echo "{$info['city']}";?>
	</td>
	<td class="table_td">
	<?php echo "{$info['contact']}";?>
	</td>
	<td class="table_td">
	<?php echo "{$info['email']}";?>
	</td>
	<td class="table_td">
	<?php echo "{$info['password']}";?>
	</td>
	<td class="table_td">
	<?php echo "{$info['confirmpassword']}";?>
	</td>
	</tr>
	<?php
	}
	?>
	
	</table>
	</center>
	</div>
</body>
</html>

