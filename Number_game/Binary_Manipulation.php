<?php



/*
 * Complete the 'minOperations' function below.
 *
 * The function is expected to return a LONG_INTEGER.
 * The function accepts LONG_INTEGER n as parameter.
 */

function minOperations($n) {
    // Write your code here

}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$n = intval(trim(fgets(STDIN)));

$result = minOperations($n);

fwrite($fptr, $result . "\n");

fclose($fptr);