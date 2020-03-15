<?php
//view  
 declare(strict_types=1);
 include "AutoLoaderIncl.php";

 session_start();

 if(!isset($_SESSION['email']) )
 {
     header("Location: indexLogin.php"); //if user is logged in, redirect to indexLogin
 }
 else if($_SESSION['volunteer_superadmin']!=1)
 {
    header("Location: dashboard.php"); 
 }
 
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
        Sign Up Volnteer || Haarlem Festival
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
    <div style="margin: auto;text-align: left; width:50%">           
	<h1 style="text-align: center;">Sign Up Volnteer</h1>
                         
<!-------------------------------------------form action------------------------------------------------------------------>
        <form action="insertVolunteer.php" method="POST" style="font-size: 10px;"> 
            <label for="name" >Name</label>
                <input placeholder="enter your name " style="font-size: 15px; width:30vw; float:right;"  type="text" id="name" class="fadeIn first" name="name" required autofocus>
                <br><br>
            <label for="email_address" >E-Mail Address</label>
                <input placeholder="enter your email " style="font-size: 15px; width:30vw; float:right;"  type="email" id="email_address" class="fadeIn second" name="email" required >
                <br><br>
            <label for="password" class="lbl">Password</label>
                <input placeholder="enter more that 6 characters" style="font-size: 15px; width:30vw; float:right;"  type="password" id="password" class="fadeIn third" name="password" required>
            <br><br>
            <label for="age" >Age</label>
                <input style="font-size: 15px; width:30vw; float:right;"  type="number" id="email_address" class="fadeIn third" name="age" required >
                <br><br>
            <label for="isAdmin" >Give volunteer 'Admin' status ?<br> 1=yes  0=no  <br></label>
                <select class="fadeIn third" name="isAdmin" style="font-size: 15px; width:30vw; float:right" required> 
                <option value="0">0</option>
                <option style="color:#1e1e1e;" value="1">1</option>
                </select>
                <br><br>  
            <label for="isSuperadmin" >Give volunteer 'Super Admin' status ? <br> 1=yes  0=no<br></label>
                <select class="fadeIn third" name="isSuperAdmin" style="font-size: 15px; width:30vw; float:right" required> 
                <option value="0">0</option>
                <option style="color:#1e1e1e;" value="1">1</option>
                </select>
            <br><br><br>
            <button class="btn btn-primary" type="submit" name="signupVolunteer">
                Sign Up
            </button>
        </form>
            <br><br><br>
            <a href="dashboard.php" >
                Back
            </a>

            <br><br>
            <script>
            function myFunction(text) {
                alert(text);
                }
            </script> 
            <?php
                if($_GET["SignUpError"]=="invalidEmail"){
                    ?> <script> myFunction("Invalid email format!! Try again"); </script><?php
                }
                else if($_GET["SignUpError"]=="passwordShort")
                {
                    ?> <script> myFunction("Your password contains less than 6 characters!! Try again"); </script><?php
                }
                else if($_GET["SignUpError"]=="emailExists")
                {
                    ?> <script> myFunction("A user with the entered email already exists!! Try again"); </script><?php
                }
                else if($_GET["SignUpError"]=="ageNotNaturalNum")
                {
                    ?> <script> myFunction("Age must be a Natural number!!(NO Negative or decimal numbers) Try again"); </script><?php
                }
                ?>
            </div>
<!---------------------------------------------form ends------------------------------------------------------------------>

	
    </body>
 </html> 