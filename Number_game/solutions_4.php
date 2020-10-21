<?php
echo 'بسم الله الرحمن الرحيم'.'<br><hr>';

define('STDIN',fopen("input.txt", "r"));

function minOperations($input_number) {
 
    $binary_value = decbin($input_number);

	$get_gray_generated_code = getGrayGeneratedCode(strlen($binary_value)); 

    $number_of_steps = array_flip($get_gray_generated_code);

	return $number_of_steps[$binary_value];

}

function getGrayGeneratedCode($binary_digit) {
    if ($binary_digit == 1) {
        return array('0', '1');
    }
    else {
        $add_bits = getGrayGeneratedCode($binary_digit - 1);
        
        $zeo_bit = array_map('getZeroAddedValue',$add_bits);

        $one_bit = array_map('getOneAddedValue', array_reverse($add_bits));

        $gray_code = array_merge($zeo_bit, $one_bit);

        return $gray_code;
    }
}

function getZeroAddedValue($a){
    return '0'.$a;
}

function getOneAddedValue($a){
    return '1'.$a;
}


// $file_open = fopen(getenv("OUTPUT_PATH"), "w");

$file_write = fopen("output.txt", "w");

$input_number = intval(trim(fgets(STDIN)));

$result = minOperations($input_number);

fwrite($file_write, $result . "\n");

fclose($file_write);
