<?php
  
 declare(strict_types=1);
session_start();

 if(isset($_SESSION['email']))
 {
     header("Location: homepageLogin.php"); //if user is logged in, redirect to homepage
 }

?> 
<!DOCTYPE html>
 <html> 
 <head> 
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="myStylesheet.css">
		<title>
			Login || Haarlem Festival
        </title> 
  
	<body> 
        
	<h1>Login</h1>
                         
        <!-------------------------------------------form action-------------------------------------------------------------->
        <form action="login.php" method="POST"> <!--Email-->
            <label for="email_address" >E-Mail Address</label>
                <input type="text" id="email_address" class="form-control" name="email" required autofocus>
            
        
            <!--password-->
            <label for="password" class="lbl">Password</label>
                    <input type="password" id="password" class="form-control" name="password" required>
            
        
            <br>
            <input type="checkbox" name="remember_me" id="remember_me">
                    Remember me 
                    <br>
        
            <button type="submit" name="login">
                Login
            </button>
            </form>
            <!-- other options -->
            <br><br>                
            <!-- <a href="index.pwdreset.php" >
                Forgot Your Password?
            </a>
            <br><br> -->
            <a href="signUpCustomer.php" >
                Not a user? Sign Up now !!
            </a>

            <?php
                if($_GET["Login"]=="Unsuccessful"){
                    echo '<p style="color:red;"> Username or Password is invalid !!<br> Try again </p>';
                }
                else if($_GET["SignUp"]=="Successful")
                {
                    echo '<p style="color:green;"> Sign Up successful <br> Log in into your account </p>';
                }
            ?>

    <!---------------------------------------------------form ends-------------------------------------------------------------->

	
    </body> 

 </html> 



