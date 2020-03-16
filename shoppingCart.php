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
        <script type="text/javascript" src="js/jazzScript.js" ></script>  
        <title>
                Cart || Haarlem Festival
        </title> 
    </head>

    <?php include ("header.php"); ?>

    <body>

        <div style="margin-top: 20px;padding-bottom: 20px;">

            <center>

                <h1 class="H1cart">Shopping Cart</h3>

            </center>

        </div>
        <p>
margin-right
margin-bottom
margin-left
All the margin properties can have the following values:

auto - the browser calculates the margin
length - specifies a margin in px, pt, cm, etc.
% - specifies a margin in % of the width of the containing element
inherit - specifies that the margin should be inherited from the parent element
Tip: Negative values are allowed.

Example
Set different margins for all four sides of a <p> element:
margin-right
margin-bottom
margin-left
All the margin properties can have the following values:

auto - the browser calculates the margin
length - specifies a margin in px, pt, cm, etc.
% - specifies a margin in % of the width of the containing element
inherit - specifies that the margin should be inherited from the parent element
Tip: Negative values are allowed.

Example
Set different margins for all four sides of a <p> element: </p>


        <?php include "footer.php";?> 
    </body>

</html>