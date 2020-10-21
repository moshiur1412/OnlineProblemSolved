<?php

$f = fopen('php://stdin', 'r');
// $f = fopen('input.txt', 'r');

$n = fgets($f);

$arr =  explode(" ", fgets($f));
sort($arr);

quartiles($arr);

function quartiles($arr){

    $n = count($arr);
 
    $min = floor(($n-1)/2);

    for($i=0; $i < $n; $i++){

        if($n % 2){
            $mid_q2 = $arr[$min];
        }else{
            $low = $arr[$min-1];
            $high = $arr[$min];
            $mid_q2 = ($low+$high)/2;
        }

        $left = 0;
        $right = $min;

        for($j=$left; $j <$right; $j++){
            $mid = round($right/2);
            
            if($right % 2){
                $mid_q1 = $arr[$right];
            }else{
                $low = $arr[$mid-1];
                $high = $arr[$mid];
                $mid_q1 = ($low+$high)/2;
            }

        }

        $left = $min; // 4
        $right = $n; // 9
        
        for($k=$left; $k <$right; $k++){
            $mid = round(($right-$left)/2)+$left;

            if(($right-$left+1) % 2){
                $mid_w = $arr[$right-$left];
            }else{
                $low = $arr[$mid-1];
                $high = $arr[$mid];
                $mid_q3 = ($low+$high)/2;
            }
        }


            
    }
        
    print($mid_q1."\n");
    print($mid_q2. "\n");
    print($mid_q3. "\n");

}
