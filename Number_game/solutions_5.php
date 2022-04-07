<?php
echo 'بسم الله الرحمن الرحيم'.'<br><hr>';

define('STDIN',fopen("input.txt", "r"));

function minOperations($input_number) {
 
    $binary_value = decbin($input_number);

    return getGeneratedCode($binary_value);

}


function getGeneratedCode($binary_digit, $default_value = '0') {
    if (strlen($binary_digit) == 1) {
        return ($binary_digit[0] == $default_value) ? 0 : 1;
    }
    if ($binary_digit[0] == $default_value) {
        return getGeneratedCode(substr($binary_digit, 1));
    }

    return getGeneratedCode(substr($binary_digit, 1), '1') + 1 + getGeneratedCode(str_pad('1', strlen($binary_digit) - 1, '0'));
}



// $file_write = fopen(getenv("OUTPUT_PATH"), "w");

$file_write = fopen("output.txt", "w");

$input_number = intval(trim(fgets(STDIN)));

$result = minOperations($input_number);

fwrite($file_write, $result . "\n");

fclose($file_write);
