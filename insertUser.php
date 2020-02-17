<?php
declare(strict_types=1);
include "AutoLoaderIncl.php";

session_start();

if (isset($_POST["signUp"])) 
{
    $users = new UserController();   

    $name=$_POST["name"];
    $email= $_POST["email"];
    $password= $_POST["password"];

    $passwordlength= strlen($password); //to check the length of the password

    $ifExists = $users->verifyCustomerEmailExistance($email); //checks if the user with the entered email already exists

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
        {  if($_GET["user"]=="customer")
            {
                 header("Location: signUpCustomer.php?SignUpError=invalidEmail");//to go back to the sign Up page
            }
        }
        else if($passwordlength < 6)    //to check if the password entered is atleast 6 characters long
        {
            if($_GET["user"]=="customer")
            {
                header("Location: signUpCustomer.php?SignUpError=passwordShort");//to go back to the sign Up page
            }
        }
        else if($ifExists==TRUE)
        {
            if($_GET["user"]=="customer")
            {
                header("Location: signUpCustomer.php?SignUpError=emailExists");//to go back to the sign Up page
            } 
        }
        
        //this else is executed when nothing is wrong with sign up
        else{
            $_SESSION['email']=$email;
            if($_GET["user"]=="customer")  //if the credentials belong to a customer
            {
                $users->addNewCustomer($name, $email, $password);
                $_SESSION['userType'] = "customer";
                header("location: postLogin.php?SignUp=Successful"); //to go the index page to login with new account
            }
        }
}
else
{
    header("Location: indexLogin.php");//to go to the login page
}



?>

