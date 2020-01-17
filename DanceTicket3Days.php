<?php

declare(strict_types=1);
session_start();

?>  
<html class = "dance">
<head>
<meta charset="utf-8"/>
<link rel="stylesheet" type="text/css" href="css/stylesheet.css">
<link rel="stylesheet" type="text/css" href="css/dancestylesheet.css">
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script type="text/javascript" src="js/jazzScript.js" ></script>  
</head>
<body>
<?php include "header.php";?>

<!-- <nav>
<ul class='danceMenu'>
<li class='danceMenuItem'><a href ="">3 days</a></li>
<li class='danceMenuItem'><a href ="">Friday</a></li>
<li class='danceMenuItem'><a href ="">Saturday</a></li>
<li class='danceMenuItem'><a href ="">Sunday</a></li>
</ul>
</nav> -->

<div class="danceTicketRow">
          <a class="DanceD1" href="DanceTicket3Days.php">    
          <div class="danceTicketColumn" style=" text-align: center; margin-top:1vw">
              3 days  
          </div>

          <a class="DanceD1" href="DanceTicketFriday.php"> 
          <div class="danceTicketColumn" style=" text-align: center;margin-top:1vw">
              Friday
          </div>

          <a class="DanceD1" href="DanceTicketSaturday.php">
          <div class="danceTicketColumn" style=" text-align: center; margin-top:1vw">
               Saturday  
          </div>

          <a class="DanceD1" href="DanceTicketSunday.php">
          <div class="danceTicketColumn" style=" text-align: center;margin-top:1vw">
                Sunday
          </div>
  </div> 

<?php include "footer.php";?> 

</body>
</html>