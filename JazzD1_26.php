<?php

declare(strict_types=1);
session_start();

?>  
<html>
<head>
<meta charset="utf-8"/>
<link rel="stylesheet" type="text/css" href="css/stylesheet.css">
<script type="text/javascript" src="js/jazzScript.js" ></script>  
</head>
<body>
 
  <div class="cart-quantity">
    Qty: 
    <button onclick="increase_by_one('qty1');">+</button>
    <input id="qty1" type="text" value="1" name="qty" />
    <button onclick="decrease_by_one('qty1');" />-</button>
  </div>

  <!-- later 
  https://stackoverflow.com/questions/33261525/passing-input-value-as-session-variable
  -->
 
</body>
</html>

