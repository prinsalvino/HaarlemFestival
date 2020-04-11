<?php
declare(strict_types=1);
include "showErrors.php";
session_start();

//page only accesible if user logged in


require_once __DIR__ . "/mollie/vendor/autoload.php";

$mollie = new \Mollie\Api\MollieApiClient();
$mollie->setApiKey("test_kmu5pGPcpxGN72myAFhUm4SAWeprRn");

$amount = $_POST['amount'];
$description = $_POST['description'];

// $amount = "12.50";
// $description = "marketing";

$payment = $mollie->payments->create([
  "amount" => [
    "currency" => "EUR",
    "value" => "$amount"
  ],

  "method"      => \Mollie\Api\Types\PaymentMethod::IDEAL,
  "description" => "$description",
  "redirectUrl" => "http://hfitteam1.infhaarlem.nl/Payment_confirmation_index.php", 
  "webhookUrl"  => "http://hfitteam1.infhaarlem.nl/confirm.php",
]);


header("Location: " . $payment->getCheckoutUrl(), true, 303);


// https://github.com/mollie/mollie-api-php/issues/191 refer

?>