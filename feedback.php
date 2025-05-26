<?php
include("header.php");
?>

<html>
<head>
</br>
</br>
</br>
</br>
</br>
</br>

<title><ul>Feedback Form</ul></title>		
</head>
<body style='background-color:#F9F5EC'>
<h1 align="center">Feedback Form</h1>
<form method="post" enctype="multipart/form data">
<table align="center" border="5px cellpadding=3px cellspacing=12px">

						<!--<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Name is required">
                            <span class="label-input100">Id</span>
                            <input class="input100" type="text" name="id" placeholder="Enter your id">
                            <span class="focus-input100"></span>
                        </div>!-->



						<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Email is required: ex@abc.xyz">
                            <span class="label-input100">Email</span>
                            <input class="input100" type="text" name="Email" placeholder="Enter your Email Id">
                            <span class="focus-input100"></span>
                        </div>

                        <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate = "Valid PhoneNo is required">
                            <span class="label-input100">Phone</span>
                            <input class="input100" type="number" name="PhoneNo" placeholder="Enter your PhoneNo">
                            <span class="focus-input100"></span>
                        </div>

                        <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate = "Message is required">
                            <span class="label-input100">Message</span>
                            <input class="input100" name="Message" placeholder="Your Message here..."></input>
                            <span class="focus-input100"></span>
                        </div>

                        <div class="container-contact100-form-btn">
                           
                                <span>
                                    <input type="submit" name="submit" value="submit">
                                    <i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
                                </span>
                            
                        </div>

</form>
</table>
</body>
</html>

 
   
   <?php

	include ("con1.php");
	
	if (isset($_REQUEST['submit']))
	{	
       // $Id=$_POST['Id'];
		$Email=$_POST['Email'];
		$PhoneNo =$_POST['PhoneNo'];
		$Message=$_POST['Message'];
	

	{
		$iquery="insert into feedback(Email,PhoneNo,Message)values('".$Email."','".$PhoneNo."','".$Message."')";
		$p1=mysqli_query($db,$iquery);
		if($p1)
		{
			echo "inserted";
		
		
	
			
		}
		else
		{
			echo "not inserted";
			
		
	
			
	
		}
	}
}
include("footer.php");
?>
