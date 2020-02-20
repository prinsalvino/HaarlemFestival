<?php
declare(strict_types=1);
session_start();
include "AutoLoaderIncl.php";

$jazzTicket= new ticketsService();


?>  
<html class = "jazz">
<head>
<meta charset="utf-8"/>
<link rel="stylesheet" type="text/css" href="css/stylesheet.css">
<link rel="stylesheet" type="text/css" href="css/jazzstylesheet.css">
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script type="text/javascript" src="js/jazzScript.js" ></script>  
    <title>
            Jazz || Haarlem Festival
    </title> 
</head>
<body>
<?php include "header.php";?> 

<p> 

</p>

<div class="scheduleRow">
          <a class="D1" href="jazzD1.php">
          <div class="scheduleColumn" style=" text-align: center; margin-top:1vw">
          <table style="width:100%;text-align: center;">
              <tr>
                <th>
                
                  Day 1 <br>
                  July 26,2020
                  <br>
                  Thursday<br>
                  The Patronaat
                </th>
              </tr>

              <tr style=" background-color: #fff">
                <td>
                  <b> Artist Line Up </b>
                </td>
              </tr>

              </tr> 
                <td>
                <?php $jTicketArr1=$jazzTicket->getJazzTicketInfo(1) ;  ?>
                <?php echo $jTicketArr1[3]; ?>
                <!-- Gumbo Kings -->
                </td>
              </tr>

              <tr style=" background-color: #fff">
              <td>
              <?php $jTicketArr2=$jazzTicket->getJazzTicketInfo(2) ; 
               echo $jTicketArr2[3]; ?>
              <!-- Evolve -->
              </td>
              </tr>

              <tr>
                <td>
                <?php $jTicketArr3=$jazzTicket->getJazzTicketInfo(3) ; 
               echo $jTicketArr3[3]; ?>
                <!-- Ntjam Rosie -->
                </td>
              </tr>

              <tr style=" background-color: #fff">
                <td>
                <?php $jTicketArr4=$jazzTicket->getJazzTicketInfo(4) ; 
               echo $jTicketArr4[3]; ?>
                <!-- Wicked Jazz Sounds -->
                </td>
              </tr>

              <tr>
                <td>
                <?php $jTicketArr5=$jazzTicket->getJazzTicketInfo(5) ; 
               echo $jTicketArr5[3]; ?>
                <!-- Tom Thomsom Assemble -->
                </td>
              </tr>

              <tr style=" background-color: #fff">
                <td>
                <?php $jTicketArr6=$jazzTicket->getJazzTicketInfo(6) ; 
               echo $jTicketArr6[3]; ?>
                <!-- Joanna Frazer -->
                </td>
              </tr>

              <tr>
                <td>
                  <b> View Tickets and Schedule </b>
                </td>
              </tr>
         </table>   
          </div>
          </a>

          <a class="D2" href="jazzD2.php">
          <div class="scheduleColumn" style=" text-align: center;margin-top:1vw">
            <table style="width:100%;text-align: center;">
              <tr>
                <th>
                  Day 2 <br>
                  July 27,2020
                  <br>
                  Friday<br>
                  The Patronaat
                </th>
              </tr>

              <tr style=" background-color: #fff">
                <td>
                  <b> Artist Line Up </b>
                </td>
              </tr>

              </tr> 
              <td>
              <?php $jTicketArr7=$jazzTicket->getJazzTicketInfo(7) ; 
               echo $jTicketArr7[3]; ?>
              <!-- Fox & The Mayors -->
              </td>
              </tr>

              <tr style=" background-color: #fff">
                <td>
                <?php $jTicketArr8=$jazzTicket->getJazzTicketInfo(8) ; 
               echo $jTicketArr8[3]; ?>
                <!-- Uncle Sue -->
                </td>
              </tr>

              <tr>
                <td>
                <?php $jTicketArr9=$jazzTicket->getJazzTicketInfo(9) ; 
               echo $jTicketArr9[3]; ?>
                <!-- Chris Allen -->
                </td>
              </tr>

              <tr style=" background-color: #fff">
                <td>
                <?php $jTicketArr10=$jazzTicket->getJazzTicketInfo(10) ; 
               echo $jTicketArr10[3]; ?>
                <!-- Myles Sanko -->
                </td>
              </tr>

              <tr>
                <td>
                <?php $jTicketArr11=$jazzTicket->getJazzTicketInfo(11) ; 
               echo $jTicketArr11[3]; ?>
                <!-- Ruis Soundsystem -->
                </td>
              </tr>

              <tr style=" background-color: #fff">
                <td>
                <?php $jTicketArr12=$jazzTicket->getJazzTicketInfo(12) ; 
               echo $jTicketArr12[3]; ?>
                <!-- The Family XL -->
                </td>
              </tr>

              <tr>
                <td>
                  <b> View Tickets and Schedule </b>
                </td>
              </tr>
         </table>
          </div>
          </a>

          <a class="D3" href="jazzD3.php">
          <div class="scheduleColumn" style=" text-align: center; margin-top:1vw">
          <table style="width:100%;text-align: center;">
              <tr>
                <th>
                  Day 3 <br>
                  July 28,2020
                  <br>
                  Saturday<br>
                  The Patronaat
                </th>
              </tr>

              <tr style=" background-color: #fff">
                <td>
                  <b> Artist Line Up </b>
                </td>
              </tr>

              </tr> 
              <td>
              <?php $jTicketArr13=$jazzTicket->getJazzTicketInfo(13) ; 
               echo $jTicketArr13[3]; ?>
              <!-- Gare du Nord -->
              </td>
              </tr>

              <tr style=" background-color: #fff">
                <td>
                <?php $jTicketArr14=$jazzTicket->getJazzTicketInfo(14) ; 
               echo $jTicketArr14[3]; ?>
                <!-- Rilan & The Bombardiers -->
                </td>
              </tr>

              <tr>
                <td>
                <?php $jTicketArr15=$jazzTicket->getJazzTicketInfo(15) ; 
               echo $jTicketArr15[3]; ?>
                <!-- Soul Six -->
                </td>
              </tr>

              <tr style=" background-color: #fff">
                <td>
                <?php $jTicketArr16=$jazzTicket->getJazzTicketInfo(16) ; 
               echo $jTicketArr16[3]; ?>
                <!-- Han Bennink -->
                </td>
              </tr>

              <tr>
                <td>
                <?php $jTicketArr17=$jazzTicket->getJazzTicketInfo(17) ; 
               echo $jTicketArr17[3]; ?>
                <!-- The Nordanians -->
                </td>
              </tr>

              <tr style=" background-color: #fff">
                <td>
                <?php $jTicketArr18=$jazzTicket->getJazzTicketInfo(18) ; 
               echo $jTicketArr18[3]; ?>
                <!-- Lilith Merlot -->
                </td>
              </tr>

              <tr>
                <td>
                  <b> View Tickets and Schedule </b>
                </td>
              </tr>
         </table> 
          </div>
        </a>

        <a class="D4" href="jazzD4.php">
          <div class="scheduleColumn" style=" text-align: center;margin-top:1vw">
          <table style="width:100%;text-align: center;">
              <tr>
                <th>
                  Day 4 <br>
                  July 28,2020
                  <br>
                  Saturday<br>
                  Grote Markt
                </th>
              </tr>

              <tr style=" background-color: #fff">
                <td>
                  <b> Artist Line Up </b>
                </td>
              </tr>

              </tr> 
              <td>
              <?php $jTicketArr205=$jazzTicket->getJazzTicketInfo(205) ; 
               echo $jTicketArr205[3]; ?>
              <!-- Ruis Soundsystem -->
              </td>
              </tr>

              <tr style=" background-color: #fff">
                <td>
                <?php $jTicketArr207=$jazzTicket->getJazzTicketInfo(207) ; 
               echo $jTicketArr207[3]; ?>
                <!-- Wicked Jazz Sounds -->
                </td>
              </tr>

              <tr>
                <td>
                <?php $jTicketArr209=$jazzTicket->getJazzTicketInfo(209) ; 
               echo $jTicketArr209[3]; ?>
                <!-- Evolve -->
                </td>
              </tr>

              <tr style=" background-color: #fff">
                <td>
                <?php $jTicketArr206=$jazzTicket->getJazzTicketInfo(206) ; 
               echo $jTicketArr206[3]; ?>
                <!-- The Nordanians -->
                </td>
              </tr>

              <tr>
                <td>
                <?php $jTicketArr208=$jazzTicket->getJazzTicketInfo(208) ; 
               echo $jTicketArr208[3]; ?>
                <!-- Gumbo Kings -->
                </td>
              </tr>

              <tr style=" background-color: #fff">
                <td>
                <?php $jTicketArr210=$jazzTicket->getJazzTicketInfo(210) ; 
               echo $jTicketArr210[3]; ?>
                <!-- Gare du Nord -->
                </td>
              </tr>

              <tr>
                <td>
                  <b> View Schedule </b>
                </td>
              </tr>
         </table>
          </div>
        </a>
  </div>

<?php include "footer.php";?> 
</body>
</html>