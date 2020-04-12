<?php  
declare(strict_types=1);
include "AutoLoaderIncl.php";
include "showErrors.php";
session_start();

$_SESSION['payment_description']="Haarlem Festival Tickets for user: ".ucfirst($_SESSION['userName']);
header("Location: pay.php");

?> 