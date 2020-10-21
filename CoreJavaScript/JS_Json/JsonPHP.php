<?php

$myObj->name = "John";
$myObj->age = 30;
$myObj->city = "New York";

$myJSON = json_encode($myObj);

echo $myJSON;

$myArr = array("J", "K", "l", "M");

$json = json_encode($myArr);

echo $json;

?>
