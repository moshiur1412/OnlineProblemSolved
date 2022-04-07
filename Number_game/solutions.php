<?php
echo 'بسم الله الرحمن الرحيم'.'<br><hr>';

define('STDIN',fopen("input.txt", "r"));


function minOperations($input_number) {
 
    $binary_value = decbin($input_number);

	$decimal = getGeneratedCode($binary_value);

	return bindec($decimal);
}



function getGeneratedCode($binary_value) {
    
    $decimal = $binary_value;
   
    for ($loop = 1; $loop < strlen($binary_value); $loop++) {
        
        $decimal[$loop] = (int)$decimal[$loop-1] ^ (int)$binary_value[$loop];
    
    }

    return $decimal;
}



// $file_write = fopen(getenv("OUTPUT_PATH"), "w");

$file_write = fopen("output.txt", "w");

$input_number = intval(trim(fgets(STDIN)));

$result = minOperations($input_number);

fwrite($file_write, $result . "\n");

fclose($file_write);
