<?php  
declare(strict_types=1);
session_start();
?> 
<!DOCTYPE html>
 <html class = "homepage"> 
 <head> 
    <meta charset="utf-8"/>
    <link rel="stylesheet" type="text/css" href="css/stylesheet.css">
    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="js/jazzScript.js" ></script>  
        <title>
                Home || Haarlem Festival
        </title> 
</head>
    <?php
    if(($_GET['Logout']=="Successful"))
    {
        ?><script>
            function myFunction() {
            alert("You have been logged out");
            }

            myFunction();
        </script>  
        <?php
    } ?>
  
	<body> 
    <?php include "header.php";?> 
    <div class="rowHpg">
        <div class="cloumnHpg">
            <b> Explore </b>
            <p>Explore Haarlem's beautiful<br> architecture and enjoy their rich in<br> culture and history</p>
        </div>
        <!-- <div class="cloumnHpg"style="display: inline-block;  float: right; " > -->
        <a class="cart" href="historyHomePage.php">
        <div class="cloumnHpg Himg" style="float: right;">
        </div>
        </a>
    </div>

    <div class="rowHpg">
    <a class="cart" href="foodhome.php">
    <div class="cloumnHpg Fimg">
        </div> </a>
        <div class="cloumnHpg"style="float: right;">
            <b> Eat </b>
            <p>Come and taste food ranging <br>from local to international cuisines </p>
        </div>
    </div>

    <div class="rowHpg">
        <div class="cloumnHpg">
            <b> Dance </b>
            <p>Enjoy some of The Netherland's best DJ<br> only in Haarlem Festival</p>
        </div>
        <a class="cart" href="DanceHomepg.php">
        <div class="cloumnHpg Dimg" style="float: right;">
        </div></a>
    </div>

    <div class="rowHpg">
    <a class="cart" href="JazzHomepg.php">
    <div class="cloumnHpg Jimg">
        </div></a>
        <div class="cloumnHpg"style="float: right;">
            <b> Repeat </b>
            <p>Make your evening's wonderful<br>with Live Jazz Music</p>
        </div>
    </div>

    
    <?php include "footer.php";?> 

    </body> 

 </html> 



