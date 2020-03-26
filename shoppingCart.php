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
        <script type="text/javascript" src="js/jazzScript.js" ></script> 
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

                if(!isset($_SESSION['email'])) 
                {   $ses_id=session_id();
                    
                    $arr=$CartController->getOrderItems($ses_id, NULL) ;
                }
                else
                { 
                $arr=$CartController->getOrderItems(NULL, $_SESSION['email']) ;
                 
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
                                   if(!isset($_SESSION['email'])) 
                                   {   
                                       $ses_id=session_id();
                                       $url="deleteOrders.php?userType=temp&id=".$a["ticket_id"]."&details=".$ses_id;
                                        ?> 
                                        <a class="cartDelBtn" href="<?php echo $url; ?>"> X Remove </a> 
                                        <?php                        
                                   }
                                   else
                                   { 
                                    $url="deleteOrders.php?userType=logged&id=".$a["ticket_id"]."&details=".$_SESSION['email'];
                                    ?> 
                                    <a class="cartDelBtn" href="<?php echo $url; ?>"> X Remove </a> 
                                    <?php 
                                   }                                   
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
                                   if(!isset($_SESSION['email'])) 
                                   {   
                                       $ses_id=session_id();
                                       $url="deleteOrders.php?userType=temp&id=".$a["ticket_id"]."&details=".$ses_id;
                                        ?> 
                                        <a class="cartDelBtn" href="<?php echo $url; ?>"> X Remove </a> 
                                        <?php                        
                                   }
                                   else
                                   { 
                                    $url="deleteOrders.php?userType=logged&id=".$a["ticket_id"]."&details=".$_SESSION['email'];
                                    ?> 
                                    <a class="cartDelBtn" href="<?php echo $url; ?>"> X Remove </a> 
                                    <?php 
                                   }
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
                                   if(!isset($_SESSION['email'])) 
                                   {   
                                       $ses_id=session_id();
                                       $url="deleteOrders.php?userType=temp&id=".$a["ticket_id"]."&details=".$ses_id;
                                        ?> 
                                        <a class="cartDelBtn" href="<?php echo $url; ?>"> X Remove </a> 
                                        <?php                        
                                   }
                                   else
                                   { 
                                        $url="deleteOrders.php?userType=logged&id=".$a["ticket_id"]."&details=".$_SESSION['email'];
                                        ?> 
                                        <a class="cartDelBtn" href="<?php echo $url; ?>"> X Remove </a> 
                                        <?php 
                                   }         
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
                                   if(!isset($_SESSION['email'])) 
                                   {   
                                       $ses_id=session_id();
                                       $url="deleteOrders.php?userType=temp&id=".$a["ticket_id"]."&details=".$ses_id;
                                        ?> 
                                        <a class="cartDelBtn" href="<?php echo $url; ?>"> X Remove </a> 
                                        <?php                        
                                   }
                                   else
                                   { 
                                        $url="deleteOrders.php?userType=logged&id=".$a["ticket_id"]."&details=".$_SESSION['email'];
                                        ?> 
                                        <a class="cartDelBtn" href="<?php echo $url; ?>"> X Remove </a> 
                                        <?php 
                                   }                        
                                }
                            }
                        }
                        else{
                            echo "No tickets for this day";
                        }

                        ?>
                    </div>


                </div>
                
<!--------------ROW 2-------- For special Tickets like All access --------------------->
            <div class="rowCart">        
                <?php
                if(!empty($arr))
                {?>
                <div class="columnCart" style="float: left;border-style: solid; border-color: #CCC;">
                    <h2 style="text-align:center"><u>Specials</u></h2><br> <?php
                    foreach($arr as $a)
                    {
                        if(($a["date"] != "Jul 26, 2020") && ($a["date"] != "Jul 27, 2020") && ($a["date"] != "Jul 28, 2020") && ($a["date"] != "Jul 29, 2020") )
                        {
                            ?> 
                            
                            <h3> <?php echo $a["event"]."<br>"; ?> </h3> <?php
                            echo $a["t_name"]." (€".$a["price"].") * ".$a["qty"]."<br>";    
                            echo "Total price €".$a["total_price"]."<br>";     
                            if(!isset($_SESSION['email'])) 
                                   {   
                                       $ses_id=session_id();
                                       $url="deleteOrders.php?userType=temp&id=".$a["ticket_id"]."&details=".$ses_id;
                                        ?> 
                                        <a class="cartDelBtn" href="<?php echo $url; ?>"> X Remove </a> 
                                        <?php                        
                                   }
                                   else
                                   { 
                                        $url="deleteOrders.php?userType=logged&id=".$a["ticket_id"]."&details=".$_SESSION['email'];
                                        ?> 
                                        <a class="cartDelBtn" href="<?php echo $url; ?>"> X Remove </a> 
                                        <?php 
                                   }                        
                        }
                    }?> 
                </div>    <?php
                }
                ?>

                <div class="columnCart" style="width: 40%;float: right;border-style: solid; border-color: #73ad21;">
                <H3><u> Total Price:     €
                    <?php
                    $sum = 0;
                    if(!empty($arr))
                    {
                        foreach($arr as $a)
                        {
                            $sum+= $a["total_price"];
                        }
                        echo $sum."<br><br>";
                        //check out button
                        if(!isset($_SESSION['email'])) 
                        {   
                            $ses_id=session_id();
                            ?> <center> <?php  include "cartModal.php"; ?>   </center>                
                            <?php 
                        }
                        else
                        { 
                            $url="index.php";
                            ?>
                            <button onclick="window.location.href = '<?php echo $url; ?>';">Proceed to payment</button> <?php                             
                        }
                    }
                    else{
                        echo "0<br>No items added to the cart";
                    }

                    
                    ?>
                </u></h3>
                </div>
             </div>  
             
             

 <!--------------------------------ROw 2---end---------------------------------------------------->
               
                <?php
                //exporting user orders 
                if(isset($_GET['tempUser']) && $_GET['tempUser']=="success_login") 
                {
                    $TempOrder = new TempOrder_Controller();
                    $sess_id= $_GET["ses_id"]; 
                    $arr=$CartController->getOrderItems($sess_id, NULL) ;
                    if(!empty($arr))
                    {
                        foreach($arr as $a)
                        {
                            $TempOrder->ExportTempOrder($a["ticket_id"],$_SESSION['email'],$sess_id); //pass ticket id, customer email and session id
                        }   
                    }

                    //js to reload the pg after orders are added  ?>
                    <script> 
                        window.onload = function() {
                        if(!window.location.hash) {
                            window.location = window.location + '#OrdersExported';
                            window.location.reload();
                            }
                        }                        
                    </script> 
                    <?php                  
                }

                if($_GET['order']=="deleted")
                {
                    ?><script>
                        displayDeleteAlert()();
                    </script>  
                    <?php
                }

                ?>
        </div>

        <?php
        
         include "footer.php";?> 
    </body>

</html>