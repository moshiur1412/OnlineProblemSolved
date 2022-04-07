<?php 

$input = array(1,2,3,4,5,6);

$output = array_filter($input, function($v){ return $v > 2;});

echo "<pre>"; print_r($output);

?>