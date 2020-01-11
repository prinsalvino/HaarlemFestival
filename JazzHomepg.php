<?php

declare(strict_types=1);
session_start();

?>  
<html>
<head>
<script type="text/javascript">
// Quantity spin buttons
function increase_by_one(field) {
 nr = parseInt(document.getElementById(field).value);
 document.getElementById(field).value = nr + 1;
}
 
function decrease_by_one(field) {
 nr = parseInt(document.getElementById(field).value);
 if (nr > 0) {
   if( (nr - 1) > 0) {
     document.getElementById(field).value = nr - 1;
   }
 }
} 
</script>
 
<style type="text/css">
#qty1 { width: 30px; }
 
</style>
</head>
<body>
 
  <div class="cart-quantity">
    Qty: <input id="qty1" type="text" value="1" name="qty" />
    <button onclick="increase_by_one('qty1');">+</button>
    <button onclick="decrease_by_one('qty1');" />-</button>
  </div>
 
 
</body>
</html>

