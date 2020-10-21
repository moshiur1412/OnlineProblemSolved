<?php
/*
// Sample code to perform I/O:

fscanf(STDIN, "%s\n", $name);           // Reading input from STDIN
echo "Hi, ".$name.".\n";                // Writing output to STDOUT

// Warning: Printing unwanted or ill-formatted data to output will cause the test cases to fail
*/

// Write your code here

// $handle = fopen("users.txt", "r");
$STDIN = fopen("test2.txt", "r");
// define(STDIN, test)

fscanf(STDIN, "%s\n", $number);
echo $number * 2,"\n";

fscanf(STDIN, "%s\n", $string);
echo $string;

?>