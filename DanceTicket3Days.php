<?php

declare(strict_types=1);
session_start();

?>  
<html class = "danceTicket">
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


<div class="danceTicketRow">
  <a class="DanceTicket3Days" href="DanceTicket3Days.php">    
  <div class="danceTicketColumn" style=" text-align: center; margin-top:1vw">
    3 days  
  </div>
  </a>

  <a class="DanceTicketFriday" href="DanceTicketFriday.php"> 
  <div class="danceTicketColumn" style=" text-align: center;margin-top:1vw">
    Friday
  </div>
  </a>

  <a class="DanceTicketSaturday" href="DanceTicketSaturday.php">
  <div class="danceTicketColumn" style=" text-align: center; margin-top:1vw">
    Saturday  
  </div>
  </a>

  <a class="DanceTicketSunday" href="DanceTicketSunday.php">
  <div class="danceTicketColumn" style=" text-align: center;margin-top:1vw">
    Sunday
  </div>
  </a>
</div> 

<h1>this is 3 days ticket</h1>

<table>
  <tr>
    <th>     </th>
    <th>     </th>
    <th>     </th>
  </tr>
  <tr>
    <td>3 Days: All Artists </td>
    <td>€ 250.00</td>
    <td></td>
  </tr>
  <tr>
    <td>      </td>
    <td>      </td>
    <td>      </td>
  </tr>
</table>
  

<?php include "footer.php";?> 

</body>
</html>