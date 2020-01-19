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
  <a class="DanceAbout" href="DanceInfo.php">    
  <div class="danceTicketColumn" style=" text-align: center; margin-top:1vw">
    Haarlem Dance
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

<div class = "danceFaqs">

What is Haarlem Dance?
Haarlem Dance is a special three-day programme where six of the best Dutch DJs will peform. 

When is Haarlem Dance?
It will be held on 27-29 of April 2020. 

Where is Haarlem Dance?
There will be different location for every artists. You could check the place here.

What is the minimum age requirement for Haarlem Dance?
The minimum age is 18. All visitors are obliged to carry valid prrof of identity, which must be displayed on request.

Which artists will be appearing at Haarlem Dance?
You could check the line up here.

When will my favorite artist perform?
You could check where and when is your favorite artist will perform on this page.

Make sure to have lots of fun and don't forget to share your memories wth us on Facebook, Twitter, Instagram via #HaarlemDance. 

</div>


<?php include "footer.php";?> 

</body>
</html>