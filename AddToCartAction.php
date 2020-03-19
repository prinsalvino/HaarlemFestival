<?php
include "AutoLoaderIncl.php";
include "showErrors.php";

session_start();

//getting ticket qty, price of the ticket, ticket id from the POST form
$ticket_id = $_POST["ticket_id"];
$qty = $_POST["qty1"];
$tkt_price = $_POST["tkt_price"];

if (isset($_POST["addTOcart"])) 
{
    if (!isset($_SESSION['email'])) 
    {
        //"user is not logged in"

        //create a new cookie like this
        $lifetime=60; //60 sec for testing purposes, otherwise 7200 seconds(i.e. 2hrs)
        setcookie(session_name(),session_id(),time()+$lifetime);
        // echo session_id()."====".time();

        $timeToExpire =time()+$lifetime;       
        $TempOrder = new TempOrder_Controller();
        $ses_id=session_id();
        $TempOrder->DeleteExpiredSessionToken(); //delete expired session tokens
        $TempOrder->InsertTempOrder($ses_id,$ticket_id,$qty,$tkt_price, $timeToExpire) ;//insert it into db table "temp_Order_item",
        header("Location: index.php");//to go to the index page
       // $TempOrder->ExportTempOrder($ticket_id,$customer_email);
    }

    else{
        //"user logged in";
        $Ord = new Order_Controller();
        // $Ord->Test();
        $customer_email="idgf.kr"; //$_SESSION['email'];
        //insert into db table "order_Items", take customer email from the session
        //until the order is payed, the Order stays null
        $Ord->insertOrderItems($customer_email,$ticket_id,$qty,$tkt_price);



        //what happens when a temp user logs in, 
        //the order item data from the user with session_id is trasferred to the order_items table

        //when the order is confirmed 
        //order is inserted in the "Orders"
        //insert the customer email from the  session, and total price we calculate, 
        //the order id is AI, get Item_id from the DB and for each item id in Item_id(explode), enter order id in order items

        }

        //after any of the orders are inserted, go back to the previous page
        if(isset($_REQUEST["destination"])){
            header("Location: ".$_REQUEST["destination"]."?orderAdded=yes");
        }else if(isset($_SERVER["HTTP_REFERER"])){
            header("Location: ".$_SERVER["HTTP_REFERER"]."?orderAdded=yes");
        }else{
            header("Location: index.php");//to go to the index page
             /* some fallback, redirect to index.php */
        }
}

else{
    header("Location: index.php");//to go to the index page
}