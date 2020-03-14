<?php
//getting ticket qty, price of the ticket, ticket id from the POST form

//check if user is logged in
//if user isnt logged in

//if
    //create a new session like this
    //         $lifetime=5; //5 sec for testing purposes, otherwise 7200 seconds(i.e. 2hrs)
    //         session_start();
    //         setcookie(session_name(),session_id(),time()+$lifetime);
    //         echo session_id();

    //insert it into db table "temp_Order_item",
    //temp_id in the DB is session_id, 
    //Expire_Session is the "time()+$lifetime"
        //also delete expired sessions,

//else    
    //insert into db table "order_Items", take customer email from the session, 
    //until the order is payed, the Order stays null


//what happens when a temp user logs in, 
    //the order item data from the user with session_id is trasferred to the order_items table

//when the order is confirmed 
    //order is inserted in the "Orders"
    //insert the customer email from the  session, and total price we calculate, 
    //the order id is AI, get 
