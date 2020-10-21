<?php 
// array split(string pattern, string string [, int limit]);
$string = "192.168.0.100";
// $split = split("\.", $string); // split remove in php 7
// print_r($split); // error

$explode = explode(".", $string);
echo "<pre>"; print_r($explode);

$var = 100;
$result =  $$var;
// Undefined variable
print_r($result);

?>