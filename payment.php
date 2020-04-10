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
                Order Payment || Haarlem Festival
        </title> 
    </head>

    <?php include ("header.php"); ?>

    <body>
    <div style="margin-top: 20px;padding-bottom: 20px;">
        <center>
            <h1 class="cartBody-h1"><b>Order Payment</b></h1>
        </center>
    </div>
    <div class="cartBody">
        
    
        <form style="text-align: center; margin: auto; width: 50%;" class="form-inline" method="post" action="pay.php">
            <br>
            <div class="row">
            <div class="col">
                <input type="text" class="form-control" id="amount" name="amount" placeholder="Amount € 0.00" pattern="^\d+\.\d{2}$" required>
            </div>
            <br>
            <div class=" col">
                <input type="text" class="form-control" placeholder="Description" id="description" name="description" required>
            </div>
            <br>
            <div class="col">
                <button type="submit" style="padding: 10px; color: green; border: solid green; " class="btn btn-secondary">Confirm payment</button>
            </div>
            </div>
        </form>
        <br><br>
        <p style="text-align: center"> <small> This is just a mollie payment demonstration </small></p>
    </div>
    <?php

        include "footer.php";?> 
    </body>

</html>