<?php

// codeforces.com

// input => 5 9
// $result = trim(fgets(STDIN));
// list($a,$b) = explode(' ', $result);
// $sum = $a + $b;
// echo $sum;


// { int s; cin >> s; if(s % 2 == 0 && s > 2) cout << "YES" << endl; else cout << "NO" << endl; return 0; }


// $input = trim(fgets(STDIN));

$input = 8;

if($input % 2 == 0 && $input != 2){
	echo "YES";
}else{
	echo "NO";
}