<?php
session_start();

if(isset($_GET['time']))
{
    $_SESSION['time'] = $_GET['time'];
    // echo $_SESSION['time'];
    header("Location: foodhome.php");//to back to food page
}

?>