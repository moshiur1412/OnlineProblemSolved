<?php

echo 'بسم الله الرحمن الرحيم'.'<br><hr>';

define('STDIN',fopen("Sq_fizz_Buzz.txt", "r"));

function FizzBuzz($input_value){
    
    $FIZZ = 'Fizz';
    $BUZZ = 'Buzz';
    $BR = '<br>';

    for($i=1; $i <= $input_value; $i++){  
    
        $number3 = $i%3 == 0;
        $number5 = $i%5 == 0;
                
        if($number3 && $number5){
            echo $FIZZ.$BUZZ.$BR;
        }elseif($number3){
            echo $FIZZ.$BR;
        }
        elseif ($number5) {
            echo $BUZZ.$BR;
        }
        else{
            echo $i.$BR;
        }
    }
}



$input_value = intval(trim(fgets(STDIN)));

fizzBuzz($input_value);
