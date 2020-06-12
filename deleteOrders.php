<?php
declare(strict_types=1);
include "AutoLoaderIncl.php";
//include "showErrors.php";

$CartController = new shoppingCartController;
echo $_GET['userType']."<br>".$_GET['id']."<br>".$_GET['details']."<br>";

if($_GET['userType']=="temp") 
{  $ses_id=$_GET['details'];                       
   $CartController->deleteRecordById($_GET["id"],NULL,$ses_id) ;
}
else
{ 
$email=$_GET['details'];
   $CartController->deleteRecordById($_GET["id"],$email,NULL) ;                                    
}

header("Location: shoppingCart.php?order=deleted");