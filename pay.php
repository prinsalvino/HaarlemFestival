<?php
declare(strict_types=1);
include "showErrors.php";
session_start();
if(!isset($_SESSION['payment_description']))
 {
     header("Location: index.php"); //if user did not proceed with payment, redirect to index page
 }

require_once __DIR__ . "/mollie/vendor/autoload.php";



$mollie = new \Mollie\Api\MollieApiClient();
$mollie->setApiKey("test_kmu5pGPcpxGN72myAFhUm4SAWeprRn");

$amount = $_SESSION['t_price'];
$description = $_SESSION['payment_description'];

// $amount = "12.50";
// $description = "marketing";

$payment = $mollie->payments->create([
  "amount" => [
    "currency" => "EUR",
    "value" => "$amount"
  ],

  "method"      => \Mollie\Api\Types\PaymentMethod::IDEAL,
  "description" => "$description",
  "redirectUrl" => "http://hf20112020.infhaarlem.nl/Payment_confirmation_index.php", 
  "webhookUrl"  => "http://hf20112020.infhaarlem.nl/confirm.php",
]);

unset($_SESSION['confirm']);
$_SESSION['confirm'] = "Confirm";

header("Location: " . $payment->getCheckoutUrl(), true, 303);


// https://github.com/mollie/mollie-api-php/issues/191 refer

?>