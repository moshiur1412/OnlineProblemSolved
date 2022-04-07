<?php



/*
 * Complete the 'test' function below.
 *
 * The function accepts following parameters:
 *  1. STRING firstDate
 *  2. STRING secondDate
 *  3. STRING dayOfWeek
 */

function test($firstDate, $secondDate, $dayOfWeek) {
    file_get_contents('https://jsonmock.hackerrank.com/api/stocks');

    $theResponse = file_get_contents('https://jsonmock.hackerrank.com/api/stocks');  
    var_dump($theResponse);
}

$firstDate = rtrim(fgets(STDIN), "\r\n");

$secondDate = rtrim(fgets(STDIN), "\r\n");

$dayOfWeek = rtrim(fgets(STDIN), "\r\n");

test($firstDate, $secondDate, $dayOfWeek);
