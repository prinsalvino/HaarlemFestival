<?php
  
 declare(strict_types=1);
session_start();

 if(isset($_SESSION['email']))
 {
     header("Location: index.php"); //if user is logged in, redirect to homepage
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
			Login || Haarlem Festival
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
	<h1>Login</h1>
                         
        <!-------------------------------------------form action-------------------------------------------------------------->

<div class=" fadeInDown">
  <div >
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <!-- <img src="http://danielzawadzki.com/codepen/01/icon.svg" id="icon" alt="User Icon" /> -->
    </div>

    <!-- Login Form -->

            <!--  -->
            <?php
                    if($_GET["tempUser"]=="login") //if the user is coming from shopping cart pass the get var tempUser
                    {
                        $ses_id= $_GET["ses_id"];
                        ?><form action="login.php?tempUser=login&ses_id=<?php echo  $ses_id; ?>" method="POST">
                        <?php
                    }
                    else{
                        ?><form action="login.php" method="POST"> 
                        <?php
                    }
            ?>
            <label for="email_address" >E-Mail Address</label><br>
            <input style="width:30vw; " type="text" id="login" class="fadeIn second" name="email" placeholder="e mail" required autofocus>
            <br>
            <label for="password" class="lbl">Password</label><br>
            <input  style="width:30vw;" type="password" id="password" class="fadeIn third" name="password"  placeholder="password" required>
            <br><br>
            <button type="submit" name="login">
                        Login
                    </button>
        </form>
    <br><br>
    <!-- Sign up -->
    <div id="formFooter">
    <a href="signUpCustomer.php" >
        Not a user? Sign Up now !!
    </a>
    </div>
    </div>
  </div>
</div>
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



