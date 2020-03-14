<?php
include "config.php";
include_once "shoppingCartDB.php";
if (isset($_GET['customer_id'])){
    $customer_id = $_GET['customer_id'];
    $ticket_id = $_GET['ticket_id'];
    $DB = new ShopDB();
    $delete = $common->deleteRecordById($connection,$customer_id, $ticket_id);
    if ($delete){
        echo '<script>alert("Record deleted successfully !")</script>';
        echo '<script>window.location.href="index.php";</script>';
    }
}