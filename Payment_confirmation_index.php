<?php  
declare(strict_types=1);
include "AutoLoaderIncl.php";
//include "showErrors.php";
include_once "shoppingCartController.php";

$ses_id=session_id();

if($_SESSION['confirm'] != "Confirm"  )
 {
     header("Location: index.php"); //if user did not proceed with payment, redirect to index page
 }

?> 
    
<!DOCTYPE html>

<html lang="en" class = "cart">
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="css/stylesheet.css">
        <link rel="stylesheet" href="css/cartStylesheet.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script type="text/javascript" src="js/jazzScript.js" ></script> 
        <meta http-equiv="Cache-control" content="no-cache" />
        <title>
            Order Confirmed || Haarlem Festival
        </title> 
    </head>

    <?php include ("header.php"); ?>

    <body>
    <div style="margin-top: 20px;padding-bottom: 20px;">
        <center>
            <h1 class="cartBody-h1"><b>Order Confirmed</b></h1>
        </center>
    </div>
    <div class="cartBody">
    <p style="text-align: center"> 
        Your order is confirmed<br>Thank you for shopping with us. Have a nice day! 
    </p>
    </div>
    <?php
        unset($_SESSION['confirm']);
        $CartController = new shoppingCartController;
        $CartController->confirmOrder($_SESSION['email'], $_SESSION['t_price']) ;

        include "footer.php";?> 
    </body>

</html>