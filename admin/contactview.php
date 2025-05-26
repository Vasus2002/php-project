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

$sql="SELECT * FROM contact";

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
	<h1>Contact details</h1>
	<br><br>
	<table border="3px">
	<tr>
	<th class="table_th">Your Name</th>
	<th class="table_th">Email</th>
	<th class="table_th">Message</th>
	
	</tr>
	
	<?php
	while($info=$result->fetch_assoc())
	{
	
	?>
	<tr>
	<td class="table_td">
	<?php echo "{$info['Your_Name']}";?>
	</td>
	<td class="table_td">
	<?php echo "{$info['Email']}";?>
	</td>
	<td class="table_td">
	<?php echo "{$info['Message']}";?>
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

