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
        <title>
                Cart || Haarlem Festival
        </title> 
    </head>

    <?php include ("header.php"); ?>

    <body>

        <div style="margin-top: 20px;padding-bottom: 20px;">
            <center>
                <h1 class="cartBody-h1"><b>Shopping Cart</b></h1>
            </center>
        </div>

        <div class="cartBody">
        <?php 
            if(!isset($_SESSION['email'])) 
            { ?> <center> <?php  include "cartModal.php"; ?>   </center>
        <?php 
        }
        else{ 
            $url="index.php";
            ?>
            <button onclick="window.location.href = '<?php echo $url; ?>';">Proceed to payment</button> <?php } ?>

            <p style="z-index:2"><b> 
            <?php //echo $_SESSION['time']; ?>
[21:58] Gremlin: Bruh why you takin' pictures of me?
[21:59] Mӕds (Øverlord): you are a gob
[21:59] Gremlin: Gob Grem Rat
[13:42] Muskan: @everyone ITSM teacher Usman wants to arrange an online lecture this week, he asked to discuss the timing and date with you all
[13:43] Gremlin: I'm just chillin' all week.
[13:43] Mӕds (Øverlord): Yeah exactly
[13:44] Gremlin: So whenever's fine for me
[13:53] Muskan: should we go for tomorrow?
[13:54] Thomaß (Überlord): Anytime, I'll make time for it
[13:57] IB veteran stephen (Ovarawd): how about we actually do it base on the actuall school schedule?
[13:58] Muskan: soo
[13:59] Muskan: we have consultancy on the same time as in the schedule on moodle
[13:59] Muskan: do i put it in #announcements ?
[14:03] Mӕds (Øverlord): sure
[14:28] Branni Babbu (ØværæstLørd): feel free to do @.everyone
[14:29] Muskan: He'll send an email to everyone later
[21:58] Gremlin: Bruh why you takin' pictures of me?
[21:59] Mӕds (Øverlord): you are a gob
[21:59] Gremlin: Gob Grem Rat
[13:42] Muskan: @everyone ITSM teacher Usman wants to arrange an online lecture this week, he asked to discuss the timing and date with you all
[13:43] Gremlin: I'm just chillin' all week.
[13:43] Mӕds (Øverlord): Yeah exactly
[13:44] Gremlin: So whenever's fine for me
[13:53] Muskan: should we go for tomorrow?
[13:54] Thomaß (Überlord): Anytime, I'll make time for it
[13:57] IB veteran stephen (Ovarawd): how about we actually do it base on the actuall school schedule?
[13:58] Muskan: soo
[13:59] Muskan: we have consultancy on the same time as in the schedule on moodle
[13:59] Muskan: do i put it in #announcements ?
[14:03] Mӕds (Øverlord): sure
[14:28] Branni Babbu (ØværæstLørd): feel free to do @.everyone
[14:29] Muskan: He'll send an email to everyone later8</b></p>

        </div>

        <?php
         include "footer.php";?> 
    </body>

</html>