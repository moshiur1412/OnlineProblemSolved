<?php 

function minOperations($input_number) {
 
    $binary_value = decbin($input_number);

    $decimal = getGeneratedCode($binary_value);

    return bindec($decimal);

}

function getGeneratedCode($binary_value) {
    
    $decimal = $binary_value;
   
    for ($size = 1; $size < strlen($binary_value); $size++) {
        
        $decimal[$size] = (int)$decimal[$size-1] ^ (int)$binary_value[$size];
    
    }

    return $decimal;
}


$file_write = fopen(getenv("OUTPUT_PATH"), "w");

$input_number = intval(trim(fgets(STDIN)));

$final_output = minOperations($input_number);

fwrite($file_write, $final_output . "\n");

fclose($file_write);