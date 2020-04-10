<?php
declare(strict_types=1);
include "showErrors.php";
session_start();


if(!isset($_SESSION['email']))
 {
     header("Location: index.php"); //if user is not logged in, redirect to user index pg
 }
//page only accesible if user logged in


require_once __DIR__ . "/mollie/vendor/autoload.php";

$mollie = new \Mollie\Api\MollieApiClient();
$mollie->setApiKey("test_kmu5pGPcpxGN72myAFhUm4SAWeprRn");

$amount = $_POST['amount'];
$description = $_POST['description'];

$payment = $mollie->payments->create([
  "amount" => [
    "currency" => "EUR",
    "value" => "$amount"
  ],
//   "testmode" => true,
  "description" => "$description",
  "redirectUrl" => "http://hfitteam1.infhaarlem.nl/Payment_confirmation_index.php", 
  "webhookUrl"  => "http://hfitteam1.infhaarlem.nl/confirm.php",
]);


header("Location: " . $payment->getCheckoutUrl(), true, 303);


// https://github.com/mollie/mollie-api-php/issues/191 refer

?>