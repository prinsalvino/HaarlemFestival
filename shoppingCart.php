<?php  
declare(strict_types=1);
session_start();
?> 
    
<!DOCTYPE html>

<html lang="en" class = "cart">
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="css/stylesheet.css">
        <link rel="stylesheet" href="css/cartStylesheet.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script type="text/javascript" src="js/cartJavaScr.js" ></script>  
        <title>
                Cart || Haarlem Festival
        </title> 
    </head>

    <?php include ("header.php"); ?>

    <body>

        <div style="margin-top: 20px;padding-bottom: 20px;">

            <center>

                <h1 class="cartBody-h1"><b>Shopping Cart</b></h3>

            </center>

        </div>

        <div class="cartBody">
            <!-- Trigger/Open The Modal -->
        <button id="myBtn">Checkout</button>
        <!-- The Modal -->
        <div id="myModal" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
            <span class="close">&times;</span>
            <p>Some text in the Modal..</p>
        </div>

        </div>
            <p style="z-index:2"><b>        </b></p>

        </div>
        <?php include "footer.php";?> 
    </body>

</html>