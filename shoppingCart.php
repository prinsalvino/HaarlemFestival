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
                $CartController = new shoppingCartController;
                $arr=array();

                //exporting user orders 
                if(isset($_GET['tempUser']) && $_GET['tempUser']=="success_login") 
                {
                    $TempOrder = new TempOrder_Controller();
                    $ses_id= $_GET["ses_id"]; 
                    $arr=$CartController->getOrderItems($ses_id, NULL) ;
                    if(empty($arr))
                    {
                        foreach($arr as $a)
                        {
                            $TempOrder->ExportTempOrder($a["ticket_id"],$_SESSION['email'],$ses_id); //pass ticket id, customer email and session id
                        }   
                    }
                    else{
                        echo "yes";
                    }
                }

                if(!isset($_SESSION['email'])) 
                {   $ses_id=session_id();
                    ?> <center> <?php  include "cartModal.php"; ?>   </center>                
                    <?php 
                    $arr=$CartController->getOrderItems($ses_id, NULL) ;
                    foreach($arr as $a) //insert all temp ticket ids in an array to later use them to export tickets if user logs in
                    {
                       // array_push($_SESSION['tkt_ids'],$a["ticket_id"]);
                    }
                }
                else{ 
                    $arr=$CartController->getOrderItems(NULL, $_SESSION['email']) ;
                    $url="index.php";
                    ?>
                    <button onclick="window.location.href = '<?php echo $url; ?>';">Proceed to payment</button> <?php 
                        
                    }


                ?>

                <div style="z-index:2" class="rowCart">
                    <div class="columnCart">
                        <h2 style="text-align:center"><u>Day 1<br>July 26,2020</u></h2><br>
                        <?php
                        if(!empty($arr))
                        {
                            foreach($arr as $a)
                            {
                                if($a["date"] == "Jul 26, 2020" )
                                {
                                    ?> <h3> <?php echo $a["event"]."<br>"; ?> </h3> <?php
                                   echo $a["t_name"]." (€".$a["price"].") * ".$a["qty"]."<br>";    
                                   echo "Total price €".$a["total_price"]."<br>";     
                                   ?> <small> <button> X Remove </button> </small> <?php                        
                                }
                            }
                        }
                        else{
                            echo "No tickets for this day";
                        }
                        ?>
                    </div>
                     <div class="columnCart">
                        <h2 style="text-align:center"><u>Day 2<br>July 27,2020</u></h2><br>
                        <?php
                        if(!empty($arr))
                        {
                            foreach($arr as $a)
                            {
                                if($a["date"] == "Jul 27, 2020" )
                                {
                                    ?> <h3> <?php echo $a["event"]."<br>"; ?> </h3> <?php
                                   echo $a["t_name"]." (€".$a["price"].") * ".$a["qty"]."<br>";    
                                   echo "Total price €".$a["total_price"]."<br>";     
                                   ?> <small> <button> X Remove </button> </small> <?php                        
                                }
                            }
                        }
                        else{
                            echo "No tickets for this day";
                        }
                        ?>
                    </div>
                    <div class="columnCart">
                        <h2 style="text-align:center"><u>Day 3<br>July 28,2020</u></h2><br>
                        <?php
                        if(!empty($arr))
                        {
                            foreach($arr as $a)
                            {
                                if($a["date"] == "Jul 28, 2020" )
                                {
                                    ?> <h3> <?php echo $a["event"]."<br>"; ?> </h3> <?php
                                   echo $a["t_name"]." (€".$a["price"].") * ".$a["qty"]."<br>";    
                                   echo "Total price €".$a["total_price"]."<br>";     
                                   ?>  <button><small> X Remove </small></button>  <?php                        
                                }
                            }
                        }
                        else{
                            echo "No tickets for this day";
                        }
                        ?>
                    </div>
                    <div class="columnCart">
                        <h2 style="text-align:center"><u>Day 4<br>July 29,2020</u></h2><br>
                        <?php
                        if(!empty($arr))
                        {
                            foreach($arr as $a)
                            {
                                if($a["date"] == "Jul 29, 2020" )
                                {
                                    ?> <h3> <?php echo $a["event"]."<br>"; ?> </h3> <?php
                                   echo $a["t_name"]." (€".$a["price"].") * ".$a["qty"]."<br>";    
                                   echo "Total price €".$a["total_price"]."<br>";     
                                   ?> <small> <button> X Remove </button> </small> <?php                        
                                }
                            }
                        }
                        else{
                            echo "No tickets for this day";
                        }

                        ?>
                    </div>
                </div>
                <?php
                // if($_GET['tempUser']=="success_login") 
                // {
                //     $TempOrder = new TempOrder_Controller();
                //     //$TempOrder->test();
                //     $ses_id= $_GET["ses_id"]; 
                //     $arr=$CartController->getOrderItems($ses_id, NULL) ;
                //     //$_SESSION['email'] = "abc.est";
                //     foreach($arr as $a)
                //     {
                //         //echo  $a["ticket_id"]."<br>";
                //         $TempOrder->ExportTempOrder($a["ticket_id"],$_SESSION['email'],$ses_id); //pass ticket id, customer email and session id
                //     }    
                // }
                ?>
        </div>

        <?php
        
         include "footer.php";?> 
    </body>

</html>