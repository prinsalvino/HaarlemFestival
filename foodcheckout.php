<HTML >
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
<body onload = "onLoad()">
<?php

session_start();
/*ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);*/

include ("header.php");
require_once "FoodController.php";
$restaurant = new FoodController();
$times = $restaurant->getTime($_SESSION['time'], $_SESSION['restoname']);
foreach ($times as $time) {
    $list =  explode("-",$time['date']);
    $restotime[] = $list[2];
}

?>
<h1 class = "opening"> Reserve Your Table at <?php echo $_SESSION['restoname'];?>!</h1> </br>


    <div class="row">
        <div class="col">

            <form id="allform" class = "NameInput" action="AddToCartAction.php" method="POST">
              
                Date:		
                <select name="Date" class = "Date">
                    <option value="26"><?php echo $restotime[0];?></option>
                    <option value="27"><?php echo $restotime[1];?></option>
                    <option value="28"><?php echo $restotime[2];?></option>
                    <option value="29"><?php echo $restotime[3];?></option>

                </select>
                July 2020
            <br>
            <br>

                Adult: 		
                <select id = "selectboxAdult" name="Adult" class = "Adult" onchange = "calculateAll(<?php echo $_SESSION['price'];?>)">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
	                <option value="4">4</option>
                </select>
            <br>
            <br>

                Kids(<12): 		
                <select id = "selectboxKids" onchange = "calculateAll(<?php echo $_SESSION['price'];?>)" name="Kids" class = "Kids">
                    <option id = "0" value="0">0</option>
                    <option id = "1" value="1">1</option>
                    <option id = "2" value="2">2</option>
                    <option id = "3" value="3">3</option>
	                <option id = "4" value="4">4</option>
                </select>
            <br/>
            <br>

            <pre class = "Time">Time:                  <?php echo $_SESSION["time"];?></pre>


            </br>
                Comments: <input type="text" class = "comments" name="comments" >
            </form>
        </div>

        <div class="col">
            <div class = "Calculate">

                <p id = "priceAdult"> Adult  {quantity}   € {Price}</p>
                <p id = "priceKids"> Kids(<12)  {quantity}   € {Price} </p>
                <br>
                <br>

              <p class = "TotalPrice" id = "totalPrice"> € {Price}</p>
            </div>

           

            <div class = "CalculateReservation">

                <p class = "feeexplain">*A reservation fee of €10,- per person. This fee will be deducted <br>
                from the final check on visiting the restaurant.</p>

                <p id = "reservationFee">Reservation Fee  € {fee}</p>

            </div>


            <input  type="submit" class = "submitbtn" form="allform" value="Add to Cart" name = "addTOcart">

        </div>

    </div>


<script>

function  calculateAll(price) {
    var priceKids = calculateKids(price);
    var priceAdult = calculateAdult(price);
    calculateReservation();

    var total = priceKids + priceAdult;

    document.getElementById("totalPrice").innerHTML =  "Total Price: € " + total;

}

    //can also just pass the value from the parameter
function calculateKids(price) {
    var price = parseFloat(price);
    var pricekids = price/2;
    var selectBox = document.getElementById("selectboxKids");
    var selectedValue = selectBox.options[selectBox.selectedIndex].value;
    var newprice = selectedValue * pricekids;


    document.getElementById("priceKids").innerHTML = "Kids(<12): " + selectedValue + " Person, € " + newprice;

    return newprice;

}

function calculateAdult(price) {
    var price = parseFloat(price);
    var selectBox = document.getElementById("selectboxAdult");
    var selectedValue = selectBox.options[selectBox.selectedIndex].value;
    var newprice = selectedValue * price;
    

    document.getElementById("priceAdult").innerHTML = "Adult:  " + selectedValue + " Person, € " + newprice;

    return newprice;
    

}

function onLoad(){
    calculateAll(<?php echo $_SESSION['price'];?>);
    calculateReservation();
}

function calculateReservation() {
    var selectBoxAdult = document.getElementById("selectboxAdult");
    var selectBoxKids = document.getElementById("selectboxKids");

    var valueAdult =  parseInt(selectBoxAdult.options[selectBoxAdult.selectedIndex].value);
    var valueKids =  parseInt(selectBoxKids.options[selectBoxKids.selectedIndex].value);

    var valueTotal = (valueAdult + valueKids) * 10;


    document.getElementById("reservationFee").innerHTML = "Reservation Fee  € " + valueTotal;
}
</script>
</body>

</HTML>