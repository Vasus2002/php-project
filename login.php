<?php
include("header.php");
?>



 <html>
 </br>
 </br>
 </br>
 </br>
 </br>
  </br>
  </br>
  </br>
  <body style='background-color:#F9F5EC'>
<form action="login_process.php" method="post">
  <h1 align="center"><b>Login Here...</b></h1>
  
  
<table align="center" >



                        <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                            <span class="label-input100">email</span>
                            <input class="input100" type="text" name="email" placeholder="Enter your email addess">
                            <span class="focus-input100"></span>
                        </div>

                        <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate = "Message is required">
                            <span class="label-input100">Password</span>
                            <input class="input100" type="password" name="password" placeholder="Your password here..."></input>
                            <span class="focus-input100"></span>
                        </div>

                        <div class="container-contact100-form-btn">
                           
                                <span>
                                    <input type="submit" name="login" value="submit">
                                    <i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
                                </span>
                            
                        </div>

  <div class="container register">
	<p> Don't have an account?<a href="register.php">Register Here </a></p>
	</div>

</table>  
</form>

<style>
</body>
</style>
</html>

<?php
  include("footer.php");
?>

