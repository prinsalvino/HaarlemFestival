<?php
declare(strict_types=1);
include "AutoLoaderIncl.php";

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

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
        header("Location: index.php?uname=".$_SESSION['userName'].""); 
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