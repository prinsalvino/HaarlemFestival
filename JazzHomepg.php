<?php

declare(strict_types=1);
session_start();

?>  
<html class = "jazz">
<head>
<meta charset="utf-8"/>
<link rel="stylesheet" type="text/css" href="css/stylesheet.css">
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script type="text/javascript" src="js/jazzScript.js" ></script>  
</head>
<body>
<?php include "header.php";?> 

<div class="scheduleRow">
          <div class="scheduleColumn" style=" text-align: center; margin-top:1vw">
              1    
          </div>
          <div class="scheduleColumn" style=" text-align: center;margin-top:1vw">
              2
          </div>
          <div class="scheduleColumn" style=" text-align: center; margin-top:1vw">
                3  
          </div>
          <div class="scheduleColumn" style=" text-align: center;margin-top:1vw">
              4
          </div>
      </div>

<?php include "footer.php";?> 
</body>
</html>