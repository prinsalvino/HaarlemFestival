<?php
include "AutoLoaderIncl.php";
include "showErrors.php";

session_start();


//getting ticket qty, price of the ticket, ticket id from the POST form
if (isset($_POST["ticket_id"])) {
    $ticket_id = $_POST["ticket_id"];
    $qty = $_POST["qty"];
    $tkt_price = $_POST["tkt_price"];
    // echo $ticket_id ;
    // echo $qty;
    // echo $tkt_price;
}
//for restaurant/food
else{
    $restaurant = NEW FoodController();

    $ticket_id = $restaurant -> getTicketId($_POST['Date'], $_SESSION['restoname'], $_SESSION['time']);
    /*$_SESSION['ticketfood'] = $ticket_id;
    $_SESSION['Date'] = $_POST['Date'];
    $_SESSION['ClientName'] = $_POST['Name'];
    $_SESSION['AdultQ'] = $_POST['Adult'];
    $_SESSION['KidsQ'] = $_POST['Kids'];
    $_SESSION['telnum'] = $_POST['telnum'];
    $_SESSION['comment'] = $_POST['comment']; */

    $tkt_price = $_SESSION['price'];
    $qty = $_POST['Adult'] + $_POST['Kids'];
}

    if (!isset($_SESSION['email'])) 
    {
        //"user is not logged in"

        //create a new cookie like this
        $lifetime=7200; //60 sec for testing purposes, otherwise 7200 seconds(i.e. 2hrs)
        setcookie(session_name(),session_id(),time()+$lifetime);
        // echo session_id()."====".time();

        $timeToExpire =time()+$lifetime;       
        $TempOrder = new TempOrder_Controller();
        $ses_id=session_id();
        $TempOrder->DeleteExpiredSessionToken(); //delete expired session tokens
      
        $TempOrder->InsertTempOrder($ses_id,$ticket_id,$qty,$tkt_price, $timeToExpire);
        //insert it into db table "temp_Order_item"
        $TempOrder->ExportTempOrder($ticket_id,$customer_email);
    }

    else
    {
        //"user logged in";
        $Ord = new Order_Controller();
        $customer_email= $_SESSION['email'];
        //insert into db table "order_Items", take customer email from the session
        //until the order is payed, the Order Id stays 0 ans status stays unconfirmed
        $Ord->insertOrderItems($customer_email,$ticket_id,$qty,$tkt_price);
    }

    //after any of the orders are inserted, go back to the previous page
    if(isset($_REQUEST["destination"]))
    {
        header("Location: ".$_REQUEST["destination"]."?orderAdded=yes");
    }else if(isset($_SERVER["HTTP_REFERER"]))
    {
        header("Location: ".$_SERVER["HTTP_REFERER"]."?orderAdded=yes");
    }else
    {
        header("Location: index.php");//to go to the index page
            //some fallback, redirect to index.php 
    }

        ?>
