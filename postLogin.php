<?php
declare(strict_types=1);
include "AutoLoaderIncl.php";


session_start();

    $userControllerObject = new UserController();
    $UserdataArray= array(); 

    if($_SESSION['userType'] == "customer")
    {
        $UserdataArray = $userControllerObject->getCustomerInfo($_SESSION['email'])  ;
        foreach($UserdataArray as $data)   
        {	
            $_SESSION['userName'] = $data->customer_name; 
        }  
        
        if($_GET["tempUser"]=="login") //if the user is coming from shopping cart pass the get var tempUser
        {
            $ses_id= $_GET["ses_id"];
           header("location: shoppingCart.php?tempUser=success_login&ses_id=".$ses_id.""); 
        }
        else if($_GET["tempUser"]=="signup") //if the user is coming from shopping cart pass the get var tempUser
        {
            $ses_id= $_GET["ses_id"];
           header("location: shoppingCart.php?tempUser=success_login&ses_id=".$ses_id.""); 
        }
        else{
            header("Location: index.php?uname=".$_SESSION['userName'].""); 
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
        if($_SESSION['volunteer_superadmin'] == 1)
        {
           header("Location: dashboard.php?isSuperadmin=1"); 
        }
        else
        {
           header("Location: dashboard.php"); 
        }
}

?>