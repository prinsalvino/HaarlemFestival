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
        //"user is logged in"

        //create a new cookie like this
        $lifetime=60; //5 sec for testing purposes, otherwise 7200 seconds(i.e. 2hrs)
        setcookie(session_name(),session_id(),time()+$lifetime);
        echo session_id()."====".time();
        $timeToExpire =time()+$lifetime;

       
        $SeS = new TempOrder_Controller();
        $ses_id=session_id();
        $SeS->DeleteExpiredSessionToken(); //delete expired session tokens
        $SeS->InsertTempOrder($ses_id,101, 3, 10, $timeToExpire) ;//insert it into db table "temp_Order_item",
        //$SeS->ExportTempOrder(101,"testEmail@live.in");
    }

    else{
    //"user not logged in";
    //else    
    //insert into db table "order_Items", take customer email from the session, 
    //until the order is payed, the Order stays null


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

