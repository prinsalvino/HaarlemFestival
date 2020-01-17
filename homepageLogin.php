<?php
declare(strict_types=1);
include "AutoLoaderIncl.php";

session_start();

if(!isset($_SESSION['email']))
 {
     header("Location: indexLogin.php"); //if user is not logged in, redirect to user index pg
 }
?>

<!DOCTYPE html>
 <html> 
 <head>          
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="myStylesheet.css">
	<title>
		Home || Haarlem Festival
        </title> 
       
	<body> 
 
        <p >
        Welcome 
        <?php 
            $userControllerObject = new UserController();
            $UserdataArray= array(); 

            if($_SESSION['userType'] == "customer")
            {
                $UserdataArray = $userControllerObject->getCustomerInfo($_SESSION['email'])  ;
                foreach($UserdataArray as $data)   
                {	
                    $_SESSION['userName'] = $data->customer_name; 
                }            
            }
            else
            {
                $UserdataArray = $userControllerObject->getVolunteerInfo($_SESSION['email'])  ;
                foreach($UserdataArray as $data)   
                {	
                    $_SESSION['userName'] = $data->volunteer_name; 
                    $_SESSION['volunteer_age'] = $data->volunteer_age;
                    $_SESSION['volunteer_admin'] = $data->volunteer_admin;
                    $_SESSION['volunteer_superadmin'] = $data->volunteer_superadmin;
                    
                }
            }
            
            echo $_SESSION['userName']." !"; 
            if($_SESSION['volunteer_superadmin'] == 1)
            {
        ?> 
                <br><a href="signUpVolunteer.php?isSuperadmin=1" >Sign Up a new volunteer?</a> 
        <?php
            }
        ?> 
        <br>
        </p>
        <form class="logoutLblPos" align="right" name="form1" method="post" action="logout.php">                         
        <!-- logout btn-->
        <button type="submit" name="post" value="Post" class="logoutbtn" style="height: 30px; width:62px" class="logoutLblPos" align="right">
         <b> Logout </b>
         </button>
        </form>
    </body> 
 </html> 
