<?php
  
 declare(strict_types=1);
session_start();

 if(isset($_SESSION['email']))
 {
     header("Location: homepageLogin.php"); //if user is logged in, redirect to homepageLogin
 }

?> 
<!DOCTYPE html>
 <html> 
 <head> 
    <meta charset="utf-8"/>
    
		<title>
			Home || Haarlem Festival
        </title> 
  
	<body> 
    </body> 

 </html> 



