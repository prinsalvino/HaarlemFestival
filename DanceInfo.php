<?php

declare(strict_types=1);
session_start();

?>  
<html class = "danceInfo">
<head>
<meta charset="utf-8"/>
<link rel="stylesheet" type="text/css" href="css/stylesheet.css">
<link rel="stylesheet" type="text/css" href="css/dancestylesheet.css">
</head>
<body>
<?php include "header.php";?>

<div class="danceTicketRow">
  <a class="DanceAbout" href="DanceAbout.php">    
  <div class="danceTicketColumn" style=" text-align: center; margin-top:1vw">
    About Haarlem Dance
  </div>
  </a>

  <a class="DanceLocation" href="DanceLocation.php"> 
  <div class="danceTicketColumn" style=" text-align: center;margin-top:1vw">
    Location
  </div>
  </a>

  <a class="DanceFaqs" href="DanceFaqs.php">
  <div class="danceTicketColumn" style=" text-align: center; margin-top:1vw">
    FAQs
  </div>
  </a>
</div> 

<div class = "danceDescriptionInfo">
    <br> </br>Haarlem dance is a three day dance event where six of the best Dutch DJs who will fill the 
    city with dance, trance, house, and techno music. <br> </br>
    The event will be held on 27-29 of April 2020.
    <br> </br>
</div>

<?php include "footer.php";?> 

</body>
</html>