<?php
//view  
 declare(strict_types=1);
 include "AutoLoaderIncl.php";

 session_start();

//  if(isset($_SESSION['email']))
//  {
//      header("Location: index.php"); //if user is logged in, redirect to homepageLogin.php
//  }
 ?>
 <!DOCTYPE html>
 <html class = "homepage"> 
 <head> 
	<meta charset="utf-8"/>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/stylesheet.css">
		<title>
        Sign Up || Haarlem Festival
        </title> 
  
	<body style="background-color:transparent;"> 

    <header>

        <div class="headerRow" style="margin-bottom: 1vw;padding-bottom: 0.5vw; padding-right: 0.5vw">

            <div class="headerColumn">

            <img src="../img/BetterLogo.png" title="Haarlem festival" style="width:8vw; Height:8vw; margin-left:1vw">

            </div>

            <div class="headerColumn" >
            <a href="index.php" >
            <img src="../img/titlelogo.png" title="Haarlem festival" style="width:25.25vw; Height:8vw; margin-left:4vw">
            </a>
            </div>

            <div class="headerColumn" >

            <img src="../img/BetterLogo.png" title="Haarlem festival" style="float:right; width:8vw; Height:8vw; margin-left:1vw">

            </div>

        </div>    

    </header>
    <div style="text-align: center">        
	<h1>Sign Up</h1>
                         
<!-------------------------------------------form action------------------------------------------------------------------>
        <form action="insertUser.php?user=customer" method="POST"> 
            <label for="name" >Name</label><br>
                <input style="width:30vw;" type="text" id="name" class="fadeIn first" name="name" required autofocus>
            <br>
            <label for="email_address" >E-Mail Address</label><br>
                <input style="width:30vw;" type="text" id="email_address" class="fadeIn second" name="email" required >
            <br>
            <label for="password" class="lbl">Password</label><br>
                    <input style="width:30vw;" type="password" id="password" class="fadeIn third" name="password" required>

            <br><br>
            <button type="submit" name="signUp">
                Sign Up
            </button>
        </form>
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

    </div>
<!---------------------------------------------form ends------------------------------------------------------------------>

	
    </body>
 </html> 