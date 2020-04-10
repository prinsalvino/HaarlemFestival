<?php  
declare(strict_types=1);
include "AutoLoaderIncl.php";
include "showErrors.php";

?> 
    
<!DOCTYPE html>

<html lang="en" class = "cart">
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="css/stylesheet.css">
        <link rel="stylesheet" href="css/cartStylesheet.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script type="text/javascript" src="js/jazzScript.js" ></script> 
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
        Test mollie payment demonstration completed<br>Thank you for shopping with us. Have a nice day! 
    </p>
    </div>
    <?php

        include "footer.php";?> 
    </body>

</html>