<?php
declare(strict_types=1);
include "AutoLoaderIncl.php";
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();

if (isset($_POST["login"])) 
{
    if($_POST["remember_me"]=='1' || $_POST["remember_me"]=='on')  //storing email of the user as cookies
    {
        $oneMonth = time() + 3600 * 24 * 30;
        setcookie('userEmail',  $email, $oneMonth);
    }

    $email= $_POST["email"];
    $password= $_POST["password"];

    $users = new UserController();
    if($users->checkUserExistence($email, $password)==TRUE)
    {            
        $_SESSION['email']=$email;
        $_SESSION['password']=$password;

        if($users->verifyUserType($email) == TRUE) //if the user is a customer it returns TRUE
        {
            $_SESSION['userType'] = "customer";
        }
        else{
            $_SESSION['userType'] = "volunteer";
        }
        header("location: postLogin.php?Login=Successful"); //to go postLogin.php where the user is redirected further according to their roles
    }
    else
    {
        header("Location: indexLogin.php?Login=Unsuccessful");//to go back to the index page/login 
    }
}
else
{
    header("Location: indexLogin.php");//to go to the index page/login 
}


?>