<?php



/*
 * Complete the 'countMeetings' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts following parameters:
 *  1. INTEGER_ARRAY firstDay
 *  2. INTEGER_ARRAY lastDay
 */

function countMeetings($firstDay, $lastDay) {
    // Write your code here

}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$firstDay_count = intval(trim(fgets(STDIN)));

$firstDay = array();

for ($i = 0; $i < $firstDay_count; $i++) {
    $firstDay_item = intval(trim(fgets(STDIN)));
    $firstDay[] = $firstDay_item;
}

$lastDay_count = intval(trim(fgets(STDIN)));

$lastDay = array();

for ($i = 0; $i < $lastDay_count; $i++) {
    $lastDay_item = intval(trim(fgets(STDIN)));
    $lastDay[] = $lastDay_item;
}

$result = countMeetings($firstDay, $lastDay);

fwrite($fptr, $result . "\n");

fclose($fptr);
