<?php 

include ('con1.php');
session_start();

//error_reporting(0);

if (isset($_SESSION['email'])) {
    //header("location: ../template");
}

if (isset($_POST['login'])) {
	$email = $_POST['email'];
	$password =($_POST['password']);
	
	$sql = "SELECT * FROM register WHERE email='$email' AND password='$password'";
	
	$result = mysqli_query($db, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['email'] = $row['email'];
		
		echo"<script>alert('login successfully')</script>";
		
		require("index.php");
		
	}
	else 
	{
		echo "<script>alert(' wrong email & password.')</script>";
			
			require("login.php");
	}
}
?>