<?php

declare(strict_types=1);
session_start();

?>  
<html class = "dance">
<head>
<meta charset="utf-8"/>
<link rel="stylesheet" type="text/css" href="css/stylesheet.css">
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script type="text/javascript" src="js/jazzScript.js" ></script>  
</head>
<body>
<?php include "header.php";?>
<div class="danceTicketRow">
          <div class="danceTicketColumn" style=" text-align: center; margin-top:1vw">
              3 days  
          </div>
          <div class="danceTicketColumn" style=" text-align: center;margin-top:1vw">
              Friday
          </div>
          <div class="danceTicketColumn" style=" text-align: center; margin-top:1vw">
               Saturday  
          </div>
          <div class="danceTicketColumn" style=" text-align: center;margin-top:1vw">
                Sunday
          </div>
  </div>

<?php include "footer.php";?> 

</body>
</html>