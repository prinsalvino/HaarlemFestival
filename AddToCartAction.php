<?php
//AddToCartAction.php
include "AutoLoaderIncl.php";
include "showErrors.php";

session_start();

//getting ticket qty, price of the ticket, ticket id from the POST form

// if (isset($_POST["addToCart"])) 
if(true)
{
    if (!isset($_SESSION['email'])) 
    {
        //"user is not logged in"

        //create a new cookie like this
        $lifetime=60; //5 sec for testing purposes, otherwise 7200 seconds(i.e. 2hrs)
        setcookie(session_name(),session_id(),time()+$lifetime);
        echo session_id()."====".time();
        $timeToExpire =time()+$lifetime;

       
        $SeS = new TempOrder_Controller();
        $ses_id=session_id();
        $SeS->DeleteExpiredSessionToken(); //delete expired session tokens
        $SeS->InsertTempOrder($ses_id,102, 3, 10, $timeToExpire) ;//insert it into db table "temp_Order_item",
       // $SeS->ExportTempOrder(102,"testEmail2@live.in");
    }

    else{
        //"user logged in";
        $Ord = new Order_Controller();
        // $Ord->Test();
        $customer_email=$_SESSION['email'];
        $total_price = $qty * $tkt_price;
        //insert into db table "order_Items", take customer email from the session
        //until the order is payed, the Order stays null
        $Ord->insertOrderItems($customer_email,$ticket_id,$qty,$total_price);



        //what happens when a temp user logs in, 
        //the order item data from the user with session_id is trasferred to the order_items table

        //when the order is confirmed 
        //order is inserted in the "Orders"
        //insert the customer email from the  session, and total price we calculate, 
        //the order id is AI, get Item_id from the DB and for each item id in Item_id(explode), enter order id in order items

        }
}


else{
    header("Location: index.php");//to go to the index page
}

