<?php
session_start();

if(isset($_GET['time']) || isset($_GET['restoname']) || isset($_GET['price']))
{
    $_SESSION['time'] = $_GET['time'];
    $_SESSION['restoname'] = $_GET['restoname'];
    $_SESSION['price'] = $_GET['price'];
    
    header("Location: foodCheckOut.php");//to contact page
}

?>