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
    //for volunteers
    $age= $_POST["age"];
    $isAdmin= $_POST["isAdmin"];
    $isSuperadmin= $_POST["isSuperadmin"];

    $passwordlength= strlen($password); //to check the length of the password

    $ifExists = $users->verifyCustomerEmailExistance($email); //checks if the user with the entered email already exists

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
        {  if($_GET["user"]=="customer")
            {
                 header("Location: signUpCustomer.php?SignUpError=invalidEmail");//to go back to the sign Up page
            }
            else if($_GET["user"]=="volunteer") 
            {
                header("Location: signUpVolunteer.php?SignUpError=invalidEmail");//to go back to the sign Up page
            }
           
        }
        else if($passwordlength < 6)    //to check if the password entered is atleast 6 characters long
        {
            if($_GET["user"]=="customer")
            {
                header("Location: signUpCustomer.php?SignUpError=passwordShort");//to go back to the sign Up page
            }
            else if($_GET["user"]=="volunteer") 
            {
                header("Location: signUpVolunteer.php?SignUpError=invalidEmail");//to go back to the sign Up page
            }
            
        }
        else if($ifExists==TRUE)
        {
            if($_GET["user"]=="customer")
            {
                header("Location: signUpCustomer.php?SignUpError=emailExists");//to go back to the sign Up page
            } 
            else if($_GET["user"]=="volunteer") 
            {
                header("Location: signUpVolunteer.php?SignUpError=emailExists");//to go back to the sign Up page
            }
            
        }

        else if($_GET["user"]=="customer")  //if the credentials belong to a customer
        {
            $users->addNewCustomer($name, $email, $password);
            header("location: indexLogin.php?SignUp=Successful"); //to go the index page to login with new account
        }
        else if($_GET["user"]=="volunteer") 
        {
            //if the credentials belong to a volunteer
            $users->addNewVolunteer($name, $email, $password, $age, $isAdmin, $isSuperadmin );
            header("location: homepageLogin?volunteerSignUp=Successful"); 
        }
}
else
{
    header("Location: signUpCustomer.php");//to go to the sign Up page
}



?>

