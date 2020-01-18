<?php

declare(strict_types=1);
session_start();

?>  
<html class="jazzD1">
<head>
<meta charset="utf-8"/>
<link rel="stylesheet" type="text/css" href="css/stylesheet.css">
<link rel="stylesheet" type="text/css" href="css/jazzstylesheet.css">
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script type="text/javascript" src="js/jazzScript.js" ></script>  
    <title>
            Jazz D1 26 July 2020 || Haarlem Festival
    </title> 
</head>
<body>
<?php include "header.php";?> 

  <!-- <div class="cart-quantity">
    Qty: 
    <button onclick="increase_by_one('qty1');">+</button>
    <input id="qty1" type="text" value="1" name="qty" />
    <button onclick="decrease_by_one('qty1');" />-</button>
  </div> -->

  <div class="rowTicketpg">
    <div class="columnTicketpg a" style="  margin-top:1vw; text-align: center; width: 30%;">
          <h1 class="inner" >
          <b> Day 1 <br>
                  July 26,2020
                  <br><br>
                  Thursday<br>
                  The Patronaat</b>
          </h1>
    </div>


    <div class= "columnTicketpg b" style="margin-top:1vw; width: 60%;">

      <div class="rowTickets">
          <div class="columnTickets" style="margin-right: 1.5vw;" >
            <b> 
                Gumbo Kings <br>
                18:00-19:00 <br>
                Main Hall<br>
                €15   <div class="cart-quantity">
                      Qty: 
                      <button onclick="increase_by_one('qty1');">+</button>
                      <input id="qty1" type="text" value="1" name="qty" />
                      <button onclick="decrease_by_one('qty1');" />-</button>
                    </div>
            </b>
          </div>
          <div class="columnTickets" >
                  
          </div>
      </div>
    </div>  
  </div>

  <!-- later 
  https://stackoverflow.com/questions/33261525/passing-input-value-as-session-variable
  -->
 <?php include "footer.php";?> 
</body>
</html>

