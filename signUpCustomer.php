<?php
//view  
 declare(strict_types=1);
 include "AutoLoaderIncl.php";

 session_start();

 if(isset($_SESSION['email']))
 {
     header("Location: homepageLogin.php"); //if user is logged in, redirect to homepageLogin.php
 }
 ?>
 <!DOCTYPE html>
 <html> 
 <head> 
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="myStylesheet.css">
		<title>
        Sign Up || Haarlem Festival
        </title> 
  
	<body> 
        
	<h1>Sign Up</h1>
                         
<!-------------------------------------------form action------------------------------------------------------------------>
        <form action="insertUser.php?user=customer" method="POST"> 
            <label for="name" >Name</label>
                <input type="text" id="name" class="form-control" name="name" required autofocus>
            
            <label for="email_address" >E-Mail Address</label>
                <input type="text" id="email_address" class="form-control" name="email" required >

            <label for="password" class="lbl">Password</label>
                    <input type="password" id="password" class="form-control" name="password" required>

            <br><br>
            <button type="submit" name="signUp">
                Sign Up
            </button>
            <br><br>
            <a href="indexLogin.php" >
                Already a user? Log in !!
            </a>

            <br><br>
            <?php
                if($_GET["SignUpError"]=="invalidEmail"){
                    echo '<p style="color:red;"> Invalid email format !!<br> Try again </p>';
                }
                else if($_GET["SignUpError"]=="passwordShort")
                {
                    echo '<p style="color:red;">  Your password contains less than 6 characters!!<br> Try again </p>';
                }
                else if($_GET["SignUpError"]=="emailExists")
                {
                    echo '<p style="color:red;"> A user with the entered email already exists!!<br> Try again </p>';
                }
            ?>
<!---------------------------------------------form ends------------------------------------------------------------------>

	
    </body>
 </html> 