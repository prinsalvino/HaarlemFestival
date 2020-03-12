<HTML>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

 
<link rel="stylesheet" type="text/css" href="css/stylesheet.css">
<link rel="stylesheet" type="text/css" href="css/cssbootstrap/bootstrap.css">
<link href="css/foodcheckout.css" rel="stylesheet" type="text/css">



<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<?php

session_start();
/*ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);*/

include ("header.php");
?>
<h1 class = "opening"> Reserve Your Table!</h1> </br>


    <div class="row">
        <div class="col">

            <form class = "NameInput" action="/action_page.php">
                Name:   <input type="text" class = "inputName" name="Name" value=""><br>
            </form>
                <br>

            <form action="/action_page.php">
                Date:		
                <select name="Date" class = "Date">
                    <option value="26">26</option>
                    <option value="27">27</option>
                    <option value="28">28</option>
                </select>
                July 2020
            </form>
            <br>

            <form action="/action_page.php">
                Adult: 		
                <select id = "selectboxAdult" name="Adult" class = "Adult" onchange = "calculateAdult()">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
	                <option value="4">4</option>
                </select>
            </form>
            <br>
            <form action="/action_page.php">
                Kids(<12): 		
                <select id = "selectboxKids" onchange = "calculateKids()" name="Kids" class = "Kids">
                    <option id = "0" value="0">0</option>
                    <option id = "1" value="1">1</option>
                    <option id = "2" value="2">2</option>
                    <option id = "3" value="3">3</option>
	                <option id = "4" value="4">4</option>
                </select>
            </form>
            <br/>

            <pre class = "Time">Time:                  18:00</pre>

            <form class = "TelNumber" action="/action_page.php">
                Telephone Number:   	<input type="text" class = "telenumber" name="telnum" value=""><br>
            </form>

            </br>
            <form  class = "formcomment"action="/action_page.php">
                Comments: <input type="text" class = "comments" name="comments" value="">
            </form>
        </div>

        <div class="col">
            <div class = "Calculate">

                <p id = "priceAdult"> Adult  {quantity}   € {Price}</p>
                <p id = "priceKids"> Kids(<12)  {quantity}   € {Price} </p>
                <br>
                <br>

              <p class = "TotalPrice"> € {Price}</p>
            </div>

           

            <div class = "CalculateReservation">

                <p class = "feeexplain">*A reservation fee of €10,- per person. This fee will be deducted <br>
                from the final check on visiting the restaurant.</p>

                <p>Reservation Fee  € {fee}</p>

            </div>

            <input  type="submit" class = "submitbtn" value="Add to Cart">

        </div>

    </div>

<?php
	include ("footer.php");
?>
<script>
    //can also just pass the value from the parameter
function calculateKids() {

    var selectBox = document.getElementById("selectboxKids");
    var selectedValue = selectBox.options[selectBox.selectedIndex].value;
    document.getElementById("priceKids").innerHTML = "Kids(<12) " + selectedValue + " € " + "price";

}

function calculateAdult() {

var selectBox = document.getElementById("selectboxAdult");
var selectedValue = selectBox.options[selectBox.selectedIndex].value;
document.getElementById("priceAdult").innerHTML = "Adult  " + selectedValue + " € " + "price";

}
</script>
</HTML>