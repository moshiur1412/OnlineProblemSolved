 <?php
	
	$a4 = [ "a" => "red", "b" => "green", "c"=> "blue", "f" => "yellow", "h" => "white", "k" => "diff", "d" => "red"];
    $a5 = [ "a" => "red", "c" => "green", "b"=> "blue", "g" => "black", "i" => "white", "k" => "diff1" ];

    $array = array_diff($a4, $a5);                                // [yellow, diff] --> Searching value
    $array = array_diff_key($a4, $a5);                              // [yellow, white] --> Searching key
    $array = array_diff_uassoc($a4, $a5, 'self::arrayFunction'); // [green, blue, yellow, white, diff] -->checked key+val
    $array = array_diff_ukey($a4, $a5, 'self::arrayFunction');  // [yellow, white] --> searching key

	$array = array_udiff($a4,$a5, 'self::arrayFunction'); // ['yellow', 'diff']
	$array = array_udiff_assoc($a4,$a5, 'self::arrayFunction'); // ['green', 'blue','yellow', 'white', 'diff']
	$array = array_udiff_uassoc($a4,$a5, 'self::arrayFunction','self::arrayFunction'); // [same]

	
	$array = array_intersect($a4,$a5); // [red, green, blue, white]
	$array = array_intersect_assoc($a4, $a5); // [a=>red]
	$array = array_intersect_key($a4, $a5); // [red, green, blue, diff]
	$array = array_intersect_uassoc($a4, $a5, 'self::arrayFunction'); // [red]
	$array = array_intersect_ukey($a4, $a5, 'self::arrayFunction'); // [red, green, blue, diff]

	$array =array_uintersect_assoc($a4, $a5, 'self::arrayFunction');	
	$array =array_uintersect_uassoc($a4, $a5, 'self::arrayFunction');


 function arrayFunction($a, $b){

        if($a === $b){
            return 0;
        }

        return ($a>$b) ? 1 : -1;
    }

 	echo "<pre>"; print_r($array);