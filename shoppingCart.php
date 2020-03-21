<?php  
declare(strict_types=1);
include "AutoLoaderIncl.php";
// include "showErrors.php";
// session_start();

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
                $ses_id="";
                if(!isset($_SESSION['email'])) 
                {   $ses_id=session_id();
                    ?> <center> <?php  include "cartModal.php"; ?>   </center>
                
                <?php 
                }
                else{ 
                $url="index.php";
                ?>
                <button onclick="window.location.href = '<?php echo $url; ?>';">Proceed to payment</button> <?php } ?>

                <div style="z-index:2" class="rowCart">
                    <div class="columnCart">
                        <h2 style="text-align:center"><u>Day 1<br>July 26,2020</u></h2><br>
                        Sed ut perspiciatis unde om style="text-align:centernis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quiauguititit sit autpernat consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. , quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nil molestiae consequatur,sheet of illum qui dolorem eum fugiat quo voluptas nulla pariatur?                </div>
                    <div class="columnCart">
                        <h2 style="text-align:center"><u>Day 2<br>July 27,2020</u></h2><br>
                    </div>
                    <div class="columnCart">
                        <h2 style="text-align:center"><u>Day 3<br>July 28,2020</u></h2><br>
                    </div>
                    <div class="columnCart">
                        <h2 style="text-align:center"><u>Day 4<br>July 29,2020</u></h2><br>
                    </div>
                </div>

                <?php 
                    if($_GET["tempUser"]=="success_login") 
                    {
                        $TempOrder = new TempOrder_Controller();
                        $ses_id= $_GET["ses_id"];                    
                        $TempOrder->ExportTempOrder(1,$_SESSION['email'],$ses_id); //pass ticket id, customer email and session id
                    }
                ?>
        </div>

        <?php
         include "footer.php";?> 
    </body>

</html>