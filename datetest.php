<?php
include "FoodController.php";
$restaurant = NEW FoodController();
$times = $restaurant->getTime();
foreach ($times as $time) {
    $list =  explode("-",$time['date']);
    echo $list[2];
}
?>