
<?php
include("header.php");
?>
 <body style='background-color:#F9F5EC'>
<h1 align="center">Registration Form</h1>
<form method="post">
</br>
 </br>
 </br>
 </br>
 </br>
  </br>
  </br>
  </br>
<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Name is required">
                            <span class="label-input100">first Name</span>
                            <input class="input100" type="text" name="firstname" placeholder="Enter your name">
                            <span class="focus-input100"></span>
                        </div>
						<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Name is required">
                            <span class="label-input100">Last Name</span>
                            <input class="input100" type="text" name="lastname" placeholder="Enter your lastname">
                            <span class="focus-input100"></span>
                        </div>
						<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Name is required">
                            <span class="label-input100">city</span>
                            <input class="input100" type="text" name="city" placeholder="Enter your city">
                            <span class="focus-input100"></span>
                        </div>
						<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Name is required">
                            <span class="label-input100">contact</span>
                            <input class="input100" type="text" name="contact" placeholder="Enter your moblie-number">
                            <span class="focus-input100"></span>
                        </div>
						<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Name is required">
                            <span class="label-input100">email</span>
                            <input class="input100" type="text" name="email" placeholder="Enter your email">
                            <span class="focus-input100"></span>
                        </div>
						<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Name is required">
                            <span class="label-input100">password</span>
                            <input class="input100" type="password" name="password" placeholder="Enter password">
                            <span class="focus-input100"></span>
                        </div>
						<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Name is required">
                            <span class="label-input100">confirmpassword</span>
                            <input class="input100" type="password" name="confirmpassword" placeholder="Enter confirmpassword">
                            <span class="focus-input100"></span>
                        </div>
			<div class="container-contact100-form-btn">
                           
                                <span>
                                    <input type="submit" name="submit" value="submit">
                                    <i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
                                </span>
                            
                        </div>


</form>
</body>
</html>

<?php

	include ("con1.php");
	
	if (isset($_REQUEST['submit']))
	{	
       // $Id=$_POST[Id];
		$firstname=$_POST['firstname'];
		$lastname=$_POST['lastname'];
		$city=$_POST['city'];
		$contact=$_POST['contact'];
		$email=$_POST['email'];
		$password=$_POST['password'];
	    $confirmpassword=$_POST['confirmpassword'];
		
	if ($password!=$confirmpassword)
	{
		echo "Password and Confirm password dose not match";
	}
	else
	{
		$iquery="insert into register(firstname,lastname,city,contact,email,password,confirmpassword)values('".$firstname."', '".$lastname."', '".$city."', '".$contact."', '".$email."','".$password."','".$confirmpassword."')";
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
   