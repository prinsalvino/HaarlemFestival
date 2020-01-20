<?php
//view  
 declare(strict_types=1);
 include "AutoLoaderIncl.php";

 session_start();

 if(!isset($_SESSION['email']) )
 {
     header("Location: indexLogin.php"); //if user is logged in, redirect to indexLogin
 }
 else if(!$_GET['isSuperadmin']==1)
 {
    header("Location: dashboard.php"); 
 }
 ?>
 <!DOCTYPE html>
 <html> 
 <head> 
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="myStylesheet.css">
		<title>
        Sign Up Volnteer || Haarlem Festival
        </title> 
  
	<body> 
        
	<h1>Sign Up Volnteer</h1>
                         
<!-------------------------------------------form action------------------------------------------------------------------>
        <form action="insertUser.php?user=volunteer" method="POST"> 
            <label for="name" >Name</label>
                <input type="text" id="name" class="form-control" name="name" required autofocus>
                <br>
            <label for="email_address" >E-Mail Address</label>
                <input type="text" id="email_address" class="form-control" name="email" required >
                <br>
            <label for="age" >Age</label>
                <input type="text" id="email_address" class="form-control" name="age" required >
                <br>
            <label for="isAdmin" >Give volunteer 'Admin' status ?<br> 1=yes  0=no  NO other values<br></label>
                <input style="color:black" type="text" id="email_address" class="form-control" name="isAdmin" placeholer="1=yes  0=no  NO other values" required >
                <br>   
            <label for="isSuperadmin" >Give volunteer 'Super Admin' status ? <br> 1=yes  0=no  NO other values<br></label>
                <input style="color:black" type="text" id="email_address" class="form-control" name="isSuperadmin" placeholer="1=yes  0=no  NO other values" required >
                <br>
            <label for="password" class="lbl">Password</label>
                    <input type="password" id="password" class="form-control" name="password" required>

            <br><br>
            <button type="submit" name="signUp">
                Sign Up
            </button>
            <br><br>
            <a href="dashboard.php" >
                Back
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